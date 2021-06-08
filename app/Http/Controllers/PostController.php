<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

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
        return view();
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
            "category_id" =>["required"],
            "user_id" =>["required"],
            "day" =>["required"],
            "month" =>["required"],
            "year" =>["required"],
            "validate" =>["required"],
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->day = $request->day;
        $post->month = $request->month;
        $post->year = $request->year;
        $post->validate = $request->validate;

        $post->save();

        return redirect()->with('success', 'Modifications enregistrées');
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
        return view();
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
            "user_id" =>["required"],
            "day" =>["required"],
            "month" =>["required"],
            "year" =>["required"],
            "validate" =>["required"],
        ]);

        $post->title = $request->title;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->day = $request->day;
        $post->month = $request->month;
        $post->year = $request->year;
        $post->validate = $request->validate;

        $post->save();

        return redirect()->with('success', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->with('success', 'Modifications enregistrées');
    }
}
