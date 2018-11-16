<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PostController extends Controller
{
    //
    public function index()
    {
        $movielist = Movie::all();
        return view('movieindex',compact('movielist'));
    }
}
