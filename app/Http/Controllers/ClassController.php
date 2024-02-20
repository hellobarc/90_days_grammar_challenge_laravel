<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\classlist;
class ClassController extends Controller
{
    public function class($id)
    {
        $findData = classlist::find($id);
        $previousClass = classlist::where('id', '!=', $findData->id)->orderBy('id', 'desc')->take(3)->get();
        return view('class',compact('findData', 'previousClass'));
    }
    public function classList()
    {
        $data = classlist::all();
        return view('class-list', compact('data'));
    }
}
