@extends('layouts.index')

@section('content')
    @include('partials.blog.headersearch')
    <!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->
    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row" id="searchpaginate">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Post item -->
                    @foreach ($articlesearch as $post)
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img src="/img/{{$post->img}}" alt="">
                                <div class="post-date">
                                    {{--  DATE --}}
                                    <h2>{{$post->day}}</h2>
                                    <h3>{{$post->month}} {{$post->year}}</h3>
                                </div>
                            </div>
                            <div class="post-content">
                                {{-- TITRE --}}
                                <h2 class="post-title">{{$post->title}}</h2>
                                <div class="post-meta">
                                    {{-- Auteur --}}
                                    <a href="">{{$post->user->name}}</a>
                                    {{-- Category --}}
                                    <a href="">{{$post->category->category}}</a>
                                    @if ($post->comment->where('post_id', "=", $post->id)->count() <= 1)
                                        <a href="">{{$post->comment->count()}} Comment</a>
                                    @elseif ($post->comment->where('post_id', "=", $post->id)->count() > 1)
                                        <a href="">{{$post->comment->count()}} Comments</a>
                                    @endif
                                </div>
                                <p>{{$post->text}}</p>
                                <a href="{{route('show.blog', $post->id)}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    @endforeach
                    <!-- Pagination -->
                    <div class="page-pagination">
                        <a class="active" href="">01.</a>
                        <a href="">02.</a>
                        <a href="">03.</a>
                    </div>
                    {{-- <div class="col-12 d-flex justify-content-center">
						{{ $articlesearch->links() }}
					</div> --}}
                </div>
                <!-- Sidebar area -->
                <div class="col-md-4 col-sm-5 sidebar">
                    <!-- Single widget -->
                    <div class="widget-item">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="#">{{$category->category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                        <ul class="tag">
                            @foreach ($tags as $tag)
                                <li><a href="">{{$tag->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page section end-->

@endsection
