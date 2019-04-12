<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Storage;
use Illuminate\Http\UploadedFile;
use App\Models\Upload;


class UploadController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(File $file )
    {
        return view('File.create_upload', compact($file));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, File $file)
    {

        $uploadedFile = $request->file('file');
        $upload = $this->storeUploaded($file, $uploadedFile);

        Storage::disk('local')->putFileAs(
            'public/files/' . $file->title,
            $uploadedFile,
           $upload->filename
        );
        return response()->json([
            'id' => $upload->id,
        ]);
    }


    public function review(File $file)
    {

        $folder = $file->title;

        $upload = $file->uploads->first()->filename;
       // dd($upload);
       $pathToFile = storage_path("/app/public/files/{$folder}/{$upload}");
      // dd( $pathToFile);
         return response()->file($pathToFile);

    }

    public function download(File $file){
        $folder = $file->title;
        $upload = $file->uploads->first()->filename;
        $pathToFile = storage_path("/app/public/files/{$folder}/{$upload}");
        $url = Storage::url($pathToFile);
       // dd($url);
        return response()->download($pathToFile);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Upload $upload)
    {
        $upload->delete();

    return view('/home')->with('success', "File deleted");
    }

    protected function storeUploaded(File $file, UploadedFile $uploadedFile)
    {
        $upload = new Upload();
        $upload->fill([
            'filename' => $this->generateFileName($uploadedFile),
            'size' => $uploadedFile->getSize(),
        ]);

        $upload->file()->associate($file);
        $upload->user()->associate(auth()->user());
        $upload->module()->associate($file);
        $upload->save();
        return $upload;
    }

    protected function generateFileName(UploadedFile $uploadedFile)
    {
        return $uploadedFile->getClientOriginalName();
    }


}
