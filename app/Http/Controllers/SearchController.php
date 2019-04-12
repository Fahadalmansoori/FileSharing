<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\File;
use App\Models\Module;

class SearchController extends Controller
{

    public function search(Request $request, Course $course)
    {

        $results = $course->search($request->input('search'))->get();
        return view('search.index', compact('results'));
    }

    public function searchFiles(Request $request, File $file)
    {
        $results = $file->search($request->input('search'))->where('live', 1)->get();

        //dd($results);
        return view('search.index', compact('results'));
    }

    public function searchModules(Request $request, Module $module)
    {
        $results = $module->search($request->input('search'))->get();

        //dd($results);
        return view('search.index', compact('results'));
    }
}
