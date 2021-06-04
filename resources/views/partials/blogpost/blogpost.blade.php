<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="/img/{{$article->img}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->day}}</h2>
                            <h3>{{$article->month}} {{$article->year}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        {{-- Titre --}}
                        <h2 class="post-title">{{$article->title}}</h2>
                        <div class="post-meta">
                            {{-- Auteur --}}
                            <a href="">{{$article->user->name}}</a>
                            {{-- Categorie --}}
                            <a href="">{{$article->category->category}}</a>
                            {{-- Comment --}}
                            @if ($article->comment->count() <= 1)
                                <a href="">{{$article->comment->count()}} Comment</a>
                            @else
                                <a href="">{{$article->comment->count()}} Comments</a>
                            @endif
                        </div>
                        {{-- Texte --}}
                        <p>{{$article->text}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="/img/{{$article->user->img}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$article->user->name}}, <span>Author</span></h2>
                            <p>{{$article->user->description}}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments {{$article->comment->count()}}</h2>
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                                <li>
                                    <div class="commetn-text">
                                        <h3>{{$comment->name}} | {{$comment->day}} {{$comment->month}}, {{$comment->year}} | Reply</h3>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Comment Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" method="POST" action="{{route('store.comment', $article->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="comment" id="comment" placeholder="Message"></textarea>
                                        <button class="site-btn" type="submit">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                        <li><a href="#">{{$article->category->category}}</a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($article->tag as $tag) 
                            <li><a href="#">{{$tag->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
