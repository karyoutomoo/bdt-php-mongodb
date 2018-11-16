<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //
    public function create()
    {
        return view('moviescreate');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movieedit',compact('movie','id'));
    }

    public function update(Request $request, $id)
    {
        $movie= Movie::find($id);
        $movie->title = $request->get('title');
        $movie->genre = $request->get('genre');
        $movie->year = $request->get('year');
        $movie->studio = $request->get('studio');
        $movie->save();
        return redirect('movies')->with('success', 'The movie has been successfully updated');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('movies')->with('success','The movie has been  deleted');
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->get('title');
        $movie->genre = $request->get('genre');
        $movie->year = $request->get('year');
        $movie->studio = $request->get('studio');
        $movie->save();
        return redirect('movies')->with('success', 'Movies has been successfully added');
    }

    public function index()
    {
        $movies = Movie::all();
        return view('movieindex',compact('movies'));
    }
}
