<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        //
        
        $movie= movies::All();
        return view("movie.movies",["movie" => $movie]);

    }
    public function create()  
    {
        //
        return view("movie.createMovie");
    }


    public function store(Request $request)
    {
        //
        // return $request->All();
        // dd("im in store");
        $Movie = new movies();
        $Movie -> author = $request -> author;
        $Movie -> title =  $request -> title;
        $Movie -> photo =  $request -> file;
        $Movie -> description =  $request -> description;

        $Movie ->save();

         return redirect("listMovie");

        
    }

   
    public function show(movies $movies)
    {
        //
    }

    public function edit($id)
    {
        //
        $movie = movies::find($id);
        return view('movie.edit',["movie"=>$movie]);
    }

 
    public function update(Request $request, movies $movies)
    {
        //
    }

    public function destroy(movies $movies)
    {
        //
    }
}
