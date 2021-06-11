<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="css/back.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end " id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light" id="logo"><img src="/img/big-logo.png" alt="" width="89px"></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.dashboard')}}"><i class="flaticon-036-brainstorming"></i> Dashboard</a>
                    @userValidate
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('edit.user', Auth::id())}}"><i class="flaticon-037-idea"></i> Profil</a>
                    @enduserValidate
                    {{-- Ce que l'ADMIN peut faire (tout) --}}
                    @admin
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.general')}}"><i class="flaticon-018-laptop-1"></i> Images</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.discover')}}"><i class="flaticon-026-search"></i> Discover</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.service')}}"><i class="flaticon-012-cube"></i> Services</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.testimonial')}}"><i class="flaticon-043-sketch"></i> Testimonials</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.team')}}"><i class="flaticon-036-brainstorming"></i> Team</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.post')}}"><i class="flaticon-026-search"></i> Blog</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.contact')}}"><i class="flaticon-037-idea"></i> Contact</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('admin.validate')}}"><i class="flaticon-039-vector"></i> Validate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('admin.corbeille')}}"><i class="flaticon-018-laptop-1"></i> Corbeille</a>
                    @endadmin

                    {{-- Ce que l'EDITEUR peut faire (blog) --}}
                    @editer
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.post')}}"><i class="flaticon-026-search"></i>Blog</a>
                    @endediter

                    @webmaster
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('back.post')}}"><i class="flaticon-026-search"></i>Blog</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('admin.validate')}}"><i class="flaticon-039-vector"></i>Validate</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('admin.corbeille')}}"><i class="flaticon-018-laptop-1"></i>Corbeille</a>
                    @endwebmaster
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="{{asset('js/scripts.js')}}"><script>
    </body>
</html>