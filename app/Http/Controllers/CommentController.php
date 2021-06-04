<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store (Request $request, $id) {
        // request()->validate([
        //     "name" =
        // ]);
        
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->day = date('D');
        $comment->year = date('Y');
        $comment->month = date('M');
        $comment->validate = 1;
        
        $comment->post_id = $id;

        $comment->save();
        return redirect()->back()->with('success', "Commentaire ajouté");
    }
}
