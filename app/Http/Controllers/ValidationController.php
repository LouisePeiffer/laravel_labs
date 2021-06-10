<?php

namespace App\Http\Controllers;

use App\Mail\NewPostSender;
use App\Mail\ValidateSender;
use App\Models\Comment;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValidationController extends Controller
{
    public function index () {
        $roles = Role::all();
        $commentaires = Comment::all();
        $posts = Post::where('validate', 0)->where('trash', 0)->get();
        $users = User::where('validate', 0)->get();
        return view('back.validate.validate', compact('roles', 'commentaires', 'posts', 'users'));
    }

    public function updateUser (User $id) {
        $user = $id ;
        $user->validate = 1;
        $user->save();

        Mail::to($user->email)->send(new ValidateSender($user));

        return redirect()->back()->with('success', 'Validé');
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

        $newsmembers = Newsletter::all();
                foreach ($newsmembers as $member) {
                    Mail::to($member->email)->send(new NewPostSender($member));
                }

        return redirect()->back()->with('success', 'Article validé');
    }
}
