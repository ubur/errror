<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classRoom;

class classController extends Controller
{
    public function index(){
        $class = classRoom::with('students')->get();
        return view('classRoom',['classList'=> $class]);
    }
}
