<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\classlist;
class CurrentClassController extends Controller
{
   public function manage()
   {
    $data = classlist::all();
    return view('admin.current-class.manage-current-class', compact('data'));
   }
   public function create()
   {
    return view('admin.current-class.create-current-class');
   }
   public function store(Request $request)
   {
    $data = $request->all();
    classlist::create([
        'title'=>$data['title'],
        'embed_link'=>$data['link'],
        'class_number'=>$data['class_number'],
        'class_description'=>$data['class_description'],
    ]);
    return redirect()->route('admin.manage-current-class');
   }
   public function delete($id)
   {
    $data = classlist::where('id', $id)->first();
    $data->delete();
    return redirect()->route('admin.manage-current-class');
   }
}
