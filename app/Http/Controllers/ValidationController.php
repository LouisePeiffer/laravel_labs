<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index () {
        $roles = Role::all();
        $commentaires = Comment::all();
        $posts = Post::where('validate', 0)->where('trash', 0)->get();
        return view('back.validate.validate', compact('roles', 'commentaires', 'posts'));
    }

    public function updateCommentaire (Comment $id) {
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }
    public function deleteComment (Comment $id) {
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé');
    }
    public function updatePost (Post $id) {
        $post =$id;
        $post->validate = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article validé');
    }
}
