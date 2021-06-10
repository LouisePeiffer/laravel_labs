<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\TagPost;
use Illuminate\Http\Request;

class CorbeilleController extends Controller
{
    public function index () {
        $posts = Post::where('trash', 1)->get();
        return view('back.softdelete.softdeletee', compact('posts'));
    }
    public function recupPost (Post $id) {
        $post = $id;
        $post->trash = 0;
        $post->save();
        return redirect()->back()->with('success', 'Post récupéré');
    }
    public function deletePostForReal (Post $id) {
        $post = $id;

        $tagposts = TagPost::where('post_id', $post->id)->get();
        foreach ($tagposts as $tagpost) {
            $tagpost->delete();
        }

        $comments = Comment::where('post_id', $post->id)->get();
        foreach ($comments as $comment) {
            $comment->delete();
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post supprimé pour de bon');
    }
    public function corbeillePost (Post $id) {
        $post = $id;
        $post->trash = 1;
        $post->save();

        return redirect()->back()->with('success', 'Post placé dans la corbeille');
    }
}
