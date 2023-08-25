<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;

class eskulController extends Controller
{
    public function index(){
        $eskul = eskul::with('students')->get();
        return view('eskul',['eskulList'=> $eskul]);
    }
}
