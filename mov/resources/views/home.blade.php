<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="/icons/tiger.jpg">
    <title> Orbit Server | - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
        }
        #sidebar-wrapper{
            z-index: 1;
            position: fixed;
            width: 0;
            height: 100%;
            overflow-x: hidden;
            background: black;
            
            
        }
        #page-content{
            width: 100%;
            position: absolute;
            padding: 15px;
           
        }

        #wrapper.menuOpen #sidebar-wrapper{
            width: 20%;
        }

        

        #wrapper.menuOpen #page-content{

            margin-left: 20%;
             width: 80%;
        }

        @media(max-width: 768px){
            #wrapper{
                margin-top: 11px;
            }
            #wrapper.menuOpen #sidebar-wrapper{
                width: 50%;
            }
            #wrapper.menuOpen #page-content{

            margin-left: 50%;
            width: 50%;
            }
        }

        .sidebar-nav{
            list-style: none;
            padding: 0px;
        }
        .sidebar-nav li {
            line-height: 40px;
            text-indent: 20px;

        }
        .sidebar-nav li a {
            text-decoration: none;
            display: block;
        }
        .sidebar-nav li a:hover{
            background: #efff;
        }

        .nav-link:hover {
            background: #111;
        }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar navbar-dark bg-dark fixed-top">
            <span id="menu-toggle"><i class="navbar-toggler-icon"></i></span>
            
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}"><h2><b>
                    {{ 'Orbit' }}</b></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><buttn type="button" class="btn btn-outline-info">{{ 'Movies' }}
                                     <span class="caret"></span>
                                </a></buttn>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('/movies/hindi') }}">
                                        {{ __('Hindi') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/english') }}">
                                        {{ __('English') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/bangla') }}">
                                        {{ __('Bangla') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/hindi') }}">
                                        {{ __('Others') }}
                                    </a>
                                </div>
                            </li>

                            <li><a class="nav-link" href="{{ route('register') }}"><buttn type="button" class="btn btn-outline-info">{{ __('Softwares') }}</buttn></a>
                            </li>

                            <li><a class="nav-link" href="#"><!-- Button trigger modal -->
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Request?
</button>


                                </a>
                            </li>

                            <form class="form-inline my-2 my-lg-0" method="get" action="/search/{query?}">
                              <input name="search" required class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><buttn type="button" class="btn btn-outline-info">{{ 'Movies' }}
                                     <span class="caret"></span>
                                </a></buttn>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('/movies/hindi') }}">
                                        {{ __('Hindi') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/english') }}">
                                        {{ __('English') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/bangla') }}">
                                        {{ __('Bangla') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('/movies/hindi') }}">
                                        {{ __('Others') }}
                                    </a>
                                </div>
                            </li>

                            <li><a class="nav-link" href="{{ route('register') }}"><buttn type="button" class="btn btn-outline-info">{{ __('Softwares') }}</buttn></a>
                            </li>

                            <li><a class="nav-link" href="{{ route('/upload') }}"><buttn type="button" class="btn btn-outline-info">{{ __('Upload') }}</buttn></a>
                            </li>

                            <form class="form-inline my-2 my-lg-0" method="get" action="/search/{query?}">
                              <input name="search" required class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>


                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> <br><br><br>
    <div id="wrapper">
        <!--sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <span class="fa fa-home"></span> Home</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>

                  <a class="nav-link" id="v-pills-uploads-tab" data-toggle="pill" href="#v-pills-uploads" role="tab" aria-controls="v-pills-uploads" aria-selected="false">Upload</a>

                  <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
                <li><a data-toggle="collapse" data-target="#profile" href="#" > <span class="fa fa-dashboard"></span> Profile</a></li>
                <li><a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-profile">Account</a></li>
                <li><a data-toggle="collapse" data-target="#dashboard" href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Setting</a></li>
            </ul>
            
        </div>
       
        <!--main content -->
        <div id="page-content">

            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <main role="main">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      @foreach($slides as $slide)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$slide->id-1}}" class="active"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-100"height="400" width="100%" src="images/{{$slide->image}}" alt="First slide">
        </div>
      @foreach($slides as $slide)
      <div class="carousel-item">
          <img class="d-block w-100"height="400" width="100%" src="images/{{$slide->image}}" alt="First slide">
        </div>
      @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <br>
<!--SlideShow End -->


<!--Movie Card Start -->
<div class="d-flex justify-content-center align-items-center container ">
<div class="card-columns">
    @foreach($movies as $movie)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" height="199" width="160" src="images/{{$movie->film_poster}}" alt="Card image cap">
      <div class="card-body">
        <h4><b>{{$movie->name}}</b></h4>
        <p>Category : {{$movie->category}}</p>
        <p>Size :{{$movie->size}}</p>
        <p>Release Year:{{$movie->release_year}}</p>
        <p class="card-text"></p>
        <a href="movies/{{$movie->file_name}}" download><button class="btn btn-primary btn-lg btn-block">Download</button></a>

            <input type="hidden" name="mov_id" value="{{$movie->id}}">
        <a href="/movies/{{$movie->id}}">
        <button class="btn btn-secondary btn-lg btn-block">Watch Now</button></a>

        @if($logged_in)
        <a href="#">
            <form action="{{ route('movies.destroy',[$movie->id]) }}" method="post" >
          @csrf
          <input type="hidden" name="_method" value="delete">
        <button class="btn btn-danger btn-lg btn-block">Delete</button>
            </form>
        </a>
        @endif
      </div>
    </div>
    @endforeach
</div>
</div>
<br><br>
<div class="d-flex justify-content-center align-items-center container ">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Movies</h5>
            <h1>{{$t_mov}}</h1>

          </div>
        </div>

</div>
</main>

<!--Movie Card End -->
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Profile Content goes here</div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Message Content goes here</div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>

              <div class="tab-pane fade" id="v-pills-uploads" role="tabpanel" aria-labelledby="v-pills-uploads-tab">
                  <div class="col-lg-8 col-md-8 col-sm8 float-right">
<div class="card">
<div class="card text-center">
  <div class="card-header">
    <b>Upload</b>
  </div>
</div>
  <div class="card-body">
<form method="POST" action="{{ route('/store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Movie Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="movie_name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('movie_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('movie_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

        <div class="col-md-6">
            <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required>

            @if ($errors->has('category'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="release_year" class="col-md-4 col-form-label text-md-right">{{ __('Release Year') }}</label>

        <div class="col-md-6">
            <input id="release_year" type="text" class="form-control{{ $errors->has('release_year') ? ' is-invalid' : '' }}" name="release_year" required>

            @if ($errors->has('release_year'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('release_year') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="poster" class="col-md-4 col-form-label text-md-right">{{ __('Upload Poster') }}</label>

        <div class="col-md-6">
            <input id="poster" type="file" class="form-control" name="poster" accept="image/jpeg,image/x-png,image/gif" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="movie" class="col-md-4 col-form-label text-md-right">{{ __('Upload Movie') }}</label>

        <div class="col-md-6">
            <input id="movie" type="file" class="form-control" name="movie" required>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Upload') }}
            </button>
        </div>
    </div>
</form>
</div>
</div>
</div>
              </div>

            </div>
  
            
            <div class="collapse" id="profile">
                Profile Collapse 
            </div>
             <div class="collapse" id="dashboard">
                Dashboard Content 
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>

             <div>
                slflsflsflsflsnfslfsfjsj
            </div>

             <div>
                slflsflsflsflsnfslfsfjsj
            </div>

             <div>
                slflsflsflsflsnfslfsfjsj
            </div> <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
             <div>
                slflsflsflsflsnfslfsfjsj
            </div>
        </div>
    </div>
<script type="text/javascript">
    $('#menu-toggle').click(function(e){
        e.preventDefault();
        $('#wrapper').toggleClass('menuOpen');
    });
</script>
    
</body>
</html>