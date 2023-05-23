<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title='HomePage';
        $movies = Movie::where('id', '>', 4)->orderBy('title', 'asc')->get();
        return view('movies.index', compact('title', 'movies'));
    }

    public function show(){
        $movies = Movie::all();
        return view('movies.show', compact('title', 'movies'));
    }


}
