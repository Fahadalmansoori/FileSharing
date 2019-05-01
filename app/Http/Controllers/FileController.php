<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
use App\Models\Module;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Mail\FileApproved;
use App\Mail\FileDeclined;
use App\Mail\RequestFile;
use Auth;
use Mail;




class FileController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        return view('File.index', compact('files'));
    }

    public function Owned()
    {
        $files = File::owned()->get();
        return view('File.index', compact('files'));
    }

    public function Purchased()
    {
        $files = File::Purchased()->get();
        return view('File.index', compact('files'));
    }

    public function approved( )
    {
        $files =File::approved()->get();
        return view('File.index', compact('files'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(file $file)
    {
        $school = auth()->user()->school;
        $course =  auth()->user()->course;
        $modules = $course->modules;

        return view('File.create', compact('School', 'course', 'modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        // Validation
        $request->validate([
            'moduleid' => 'required',
            'about' => 'required',
            'mark' => 'required | Numeric',
            'gridCheck' => 'required',
            'academic' => 'required',
        ]);
        $title = Module::findOrFail($request->input('moduleid'));
        $title =  $title->title . ' - ' . $user->student_number;


        $file =  File::create([
            'user_id' => $user->id,
            'module_id' => $request->input('moduleid'),
            'title' => $title,
            'about' => $request->input('about'),
            'keywords' => $title,
            'mark' => $request->input('mark'),
            'price' => 10,
            'live' => false,
            'approved' => false,
            'finished' => false,
            'owner' => true,
        ]);


       return view('File.create_upload',compact('file'));
      // return redirect()->route('upload.create', $file);
    }

    // this method will store the file oject to the DB after the upload complete
    public function SubmitFileAnduploads(Request $request, File $file){
    // $request->validate([
    //         'uploads' => 'required',Rule::exists('uploads', 'file_id')->where(function ($query){ $query->whereNull('file-id');} )
    //  ]);

        $file->save();
        return redirect()->back()->with('success', 'File uploaded, a tutor will review  your submission to approve.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(File $file )
    {
     $module = $file->module;
     $school = $file->module->course->school;

     $course = $module->course;
     $owner = User::find($file->user_id);
     return view('File.page', compact('module','school','course','owner','file'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //check if the user can edit using the touch method in policies/FilePolicy
       // $this->authorize('touch', $file);

       $school = auth()->user()->school;
       $course =  auth()->user()->course;
       $modules = $course->modules;


      return view('File.edit', compact('School', 'course', 'modules','file'))->with('danger', "fgfgfg");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {
        $user = auth()->user();
        // Validation
        $request->validate([
            'moduleid' => 'required',
            'about' => 'required',
            'mark' => 'required | Numeric',
            'gridCheck' => 'required',
            'academic' => 'required',
        ]);
        $title = Module::findOrFail($request->input('moduleid'));
        $title =  $title->title . ' - ' . $user->student_number;


        $file->update([
            'user_id' => $user->id,
            'module_id' => $request->input('moduleid'),
            'title' => $title,
            'about' => $request->input('about'),
            'keywords' => $title,
            'mark' => $request->input('mark'),
            'price' => 10,
            'live' => false,
            'approved' => false,
            'finished' => false,
            'owner' => true,
        ]);
        $file->save();
        return redirect()->back()->with('success', 'File details updated , a tutor will review  the updated details.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve( File $file)
    {
        $file->update([
            $file->approved = true,
            $file->live = true,
            $file->approved_by = Auth::user()->id,
            $file->finished = false,
        ]);
        $upload =  $file->upload;
        if($upload){
        $upload->update([
         $upload->approved = true,
        ]);
        }
       $this->sendApprovedFileEmail( $file->user ,  $file);
           //$file->save();
            return redirect()->back()->with('success', 'You have approved this assignment, an email sent to inform the file owner.');

    }



    public function decline( File $file)
    {
        $file->update([
            $file->approved = false,
            $file->live = false,
            $file->approved_by = Auth::user()->id,
            $file->finished = true,
        ]);
        $upload =  $file->upload;
        if($upload){
        $upload->update([
         $upload->approved = false,
        ]);
        }
        $this->sendDeclinedFileEmail($file->user , $file);
           //$file->save();
            return redirect()->back()->with('danger', 'You have declined this assignment, an email sent to inform the file owner. ');

    }


    public function sendApprovedFileEmail(User $user , File $file){

        Mail::to($user)->send(new FileApproved($file));
    }

    public function sendRequestFileEmail(User $user , File $file){

        Mail::to($user)->send(new RequestFile($file, $user));
    }


    public function sendDeclinedFileEmail(User $user , File $file){

        Mail::to($user)->send(new FileDeclined($file));
    }

    public function request( File $file){
        $requester = Auth::user();
        $file->downloads()->create([
            'user_id'=> auth()->user()->id,
            'file_id'=>$file->id,

        ]);

        $this->sendRequestFileEmail($requester, $file);
        return redirect()->back()->with('info', 'We will send you an email with a download link,  please check your email in a few minutes.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
