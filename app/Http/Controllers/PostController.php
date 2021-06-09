<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('back.post.addPost', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "title" =>["required"],
            "img" =>["required"],
            "text" =>["required"],
            // "category_id" =>["required"],
            // "user_id" =>["required"],
            // "day" =>["required"],
            // "month" =>["required"],
            // "year" =>["required"],
            // "validate" =>["required"],
        ]);

        $post = new Post();
        $request->file('img')->storePublicly('img/', 'public');
        $post->title = $request->title;
        $post->img = $request->file('img')->hashName();
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->day = date("d");
        $post->month = date("M");
        $post->year = date("Y");
        $post->validate = 0;

        $post->save();

        foreach ($request->input('taglist')as $value) {
            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }

        return redirect()->route('back.post')->with('success', 'Modifications enregistrées');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     $article = $post;
    //     $logos = Logo::find(1);
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     return view('front.blogpostfront', compact('article','logos','categories','tags'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $tagposts = TagPost::all()->where('post_id', $post->id);
        return view('back.post.editPost', compact('post', 'categories', 'tags', 'tagposts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        request()->validate([
            "title" =>["required"],
            "img" =>["required"],
            "text" =>["required"],
            "category_id" =>["required"],
            // "user_id" =>["required"],
            // "day" =>["required"],
            // "month" =>["required"],
            // "year" =>["required"],
            // "validate" =>["required"],
        ]);

        $post->title = $request->title;
        $request->file('img')->storePublicly('img/', 'public');
        $post->img = $request->file('img')->hashName();
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->day = date("d");
        $post->month = date("M");
        $post->year = date("Y");
        $post->validate = 0;

        $post->save();

        DB::table('tagposts')->where('post_id',$post->id)->delete();

        foreach ($request->input('taglist')as $value) {
            $tag = new TagPost();
            $tag->post_id = $post->id;
            $tag->tag_id = $value;
            $tag->save();
        }

        return redirect()->route('back.post')->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $tagposts = TagPost::where('post_id', $post->id)->get();
        foreach ($tagposts as $tagpost){
            $tagpost->delete();
        }

        $comments = Comment::where('post_id', $post->id)->get();
        foreach ($comments as $comment){
            $comment->delete();
        }


        $post->delete();
        return redirect()->route('back.post')->with('success', 'Modifications enregistrées');
    }

    public function softdelete () {
        
    }
}
