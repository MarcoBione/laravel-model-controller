<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title='HomePage';
        return view('welcome', compact('title'));
    }
}
