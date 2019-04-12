<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\File;
use App\Models\Module;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
       return view('admin.index', $user );
    }

   // return the files approved by the admin

   public function ApprovedByMe(user $user){
    $files = File::approvedBy($user)->get();
    $school = $user->school;

    return view('admin.approvedByMe', compact('files','school'));
    }

    public function getPendingfiles(user $user){
       $school = $user->school;
       $files  = $school->files()->pending()->get();

        return view('admin.pendingFiles', compact('files','school','user'));
    }

    public function getDeclinedByMe(user $user){
        $school = $user->school;
        $files  = $school->files()->declinedBy($user)->get();

         return view('admin.declinedByMe', compact('files','school','user'));
     }

     public function getUploadedByMe(user $user){
        $school = $user->school;
        $files  = $user->files;

         return view('admin.uploadedByMe', compact('files','school','user'));
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

        return view('admin.create', compact('School', 'course', 'modules'));
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
            'live' => true,
            'approved' => true,
            'finished' => false,
            'owner' => true,
            'approved_by' => $user->id,
        ]);


       return view('admin.create_upload',compact('file'));
      // return redirect()->route('upload.create', $file);
    }


      // this method will store the file oject to the DB after the upload complete
      public function SubmitFileAnduploads(Request $request, File $file){

            $file->save();
            $user =  $file->user;
            return redirect()->back()->with('success', 'Assignment uploaded , and activated because you are  logging  in as a Tutor.');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function review(File $file)
    {
        $this->middleware('tutor');
        $folder = $file->title;

        $upload = $file->uploads->first()->filename;
       // dd($upload);

       $pathToFile = storage_path("/app/public/files/{$folder}/{$upload}");
;
      return response()->file($pathToFile);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
