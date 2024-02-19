<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function class()
    {
        return view('class');
    }
    public function classList()
    {
        return view('class-list');
    }
}
