<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Publication;

use App\Comment;

class CommentsController extends Controller
{
     public function new(Request $request)
    {

        $this->validate($request, [

            'comment_text' => 'required'   

        ]);
        
        $comment = new Comment;
        $comment->comment_text = $request->comment_text;
        $comment->user_id = $request->id;
        $comment->publication_id= $request->publication_id;
        $comment->save();

        return back();

    }
}
