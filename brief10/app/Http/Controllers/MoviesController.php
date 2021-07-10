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

        $Movie = new movies();
        $Movie -> author = $request -> author;
        $Movie -> title =  $request -> title;
        // $Movie -> photo =  $request -> file;()
        // if($request->hasFile("file")){
            $file = $request->file;
            $ext = $file->getClientOriginalExtension();
            $filename = time() . ".".$ext ;
            $filepath = "storage/images/";
            $file->move($filepath,$filename);
            $Movie->photo = $filepath.$filename;
        // }
        $Movie -> description =  $request -> description;

        $Movie ->save();

         return redirect("listMovie");

        
    }

   
    public function show($id)
    {
        //

    }

    public function edit($id)
    {
        //
        $movie = movies::find($id);
        return view('movie.',["movie"=>$movie]);
    }

 
    public function update(Request $request, $id)
    {
        //
        $movie =movies::find($id);
        $movie -> author = $request -> author;
        $movie -> title =  $request -> title;
        $movie -> photo =  $request -> photo;
        $movie -> description =  $request -> description;

        $movie ->save();

        return redirect("listMovie");
    }

    public function destroy(Request $request, $id)
    {
        //
        $movie =movies::find($id);
        $movie->delete();

        return redirect("listMovie");

    }
}
