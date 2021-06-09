<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Image;
use App\Models\Iphone;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //  --------- HOME ---------
    public function index () {
        $video = Video::find(1); 
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $discovers = Discover::all();
        $images = Image::all();
        $logos = Logo::find(1);
        $contacts = Contact::find(1);
        $titles = Title::all();
        $testimonials = Testimonial::all();
        $subjects = Subject::all();
        $users = User::all();
        //  TEAM
        $ceo = User::where('job_id', 1)->get();
        $team = User::where('job_id', '>', 1)->get();
        $randomUser = $team->random(2);

        return view('home', compact('video', 'services3', 'services9', 'discovers', 'images','logos', 'contacts', 'titles','testimonials','subjects','users','ceo', 'randomUser'));
    }

    // --------- SERVICES ---------
    public function services () {
        // $services9recent = Service::all()->take(9);
        $services9recent = Service::paginate(6)->fragment('servicespaginate');
        $servicesdiscover = Service::all();
        $iphoneLeft = Iphone::where('id', '<', 4)->get();
        $iphoneRight = Iphone::where('id', '>', 3)->get();
        $logos = Logo::find(1);
        $contacts = Contact::find(1);
        $titles = Title::all();
        $posts = Post::inRandomOrder()->limit(3)->get();
        $subjects = Subject::all();
        $users = User::all();
        return view('front.service', compact('services9recent', 'servicesdiscover', 'iphoneLeft','iphoneRight','logos', 'contacts', 'titles', 'posts','subjects','users'));
    }

    // --------- BLOG ---------
    public function blog () {
        $logos = Logo::find(1);
        $article = Post::paginate(3)->fragment('blogpaginate');
        $categories = Category::all();
        $tags = Tag::all();
        return view('front.blog',compact('logos','article','categories','tags'));
    }
    // SEARCH BLOG
    public function search(Request $request){
        $search = $request->search;
        $articlesearch = Post::where('title', 'LIKE', "%{$search}%")
                    ->orWhere('text', 'LIKE', "%{$search}%")->get();
                    // ->orWhere('tag_id->tag', 'LIKE', "%{$search}%")
                    // ->orWhere('category_id->category', 'LIKE', "%{$search}%")->get();
        $logos = Logo::find(1);
        $article = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('partials.blog.searchblog', compact('articlesearch','logos','article','categories','tags')); 
    }
    // --------- BLOGPOST ---------
    public function blogpost (Post $id) {
        $article = $id;
        $logos = Logo::find(1);
        // $posts = Post::all();
        // $categories = Category::all();
        // $tags = Tag::all();
        $comments = Comment::where('post_id', $article->id)->where('validate', 1)->get();
        return view('front.blogpostfront',compact('logos', 'comments','article'));
    }

    // --------- CONTACT ---------
    public function contact () {
        $map = Map::find(1);
        $logos = Logo::find(1);
        $contacts = Contact::find(1);
        $subjects = Subject::all();
        return view('front.contact', compact('map','logos', 'contacts','subjects'));
    }
}
