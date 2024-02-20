<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\classlist;
class FrontEndController extends Controller
{
   public function homePage()
   {
    $currentClass = classlist::latest()->take(1)->first();
    $previousClass = classlist::where('id', '!=', $currentClass->id)->orderBy('id', 'desc')->take(3)->get();
    return view('welcome', compact('currentClass', 'previousClass'));
   }
}
