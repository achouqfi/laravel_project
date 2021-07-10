<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\movies;

class CommentController extends Controller
{

    public function index()
    {
        //
        $movie= movies::All();
        // $comment=Comment::All();
        return view("comment.moviesAndComment",["movie" => $movie]);
        // return view("comment.moviesAndComment",["comment" => $comment]);
        
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
        $movie= movies::find($id);
        return view('comment.showMovie', ['movie' => $movie]);
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
