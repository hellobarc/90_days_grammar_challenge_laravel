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
        'ebook_link'=>$data['ebook_link'],
        'test_link'=>$data['test_link'],
        'class_description'=>$data['class_description'],
    ]);
    return redirect()->route('admin.manage-current-class');
   }
   public function edit($id)
   {
    $getData = classlist::find($id);
    return view('admin.current-class.edit-current-class', compact('getData'));
   }
   public function update(Request $request, $id)
   {
    $data = $request->all();
    classlist::updateOrCreate(['id'=>$id],[
        'title'=>$data['title'],
        'embed_link'=>$data['link'],
        'class_number'=>$data['class_number'],
        'ebook_link'=>$data['ebook_link'],
        'test_link'=>$data['test_link'],
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
