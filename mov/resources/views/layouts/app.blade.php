<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar navbar-dark bg-dark fixed-top">
            
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


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> <br><br><br>
       

        <main class="py-4">
            @include('partials.success')
            @include('partials.errors')
                            <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Your Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{route('requests.store')}}" method="post">
                                @csrf
                      <div class="modal-body">


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="request" class="col-md-4 col-form-label text-md-right">{{ __('What is your Request?') }}</label>

                                    <div class="col-md-6">
                                        <input id="request" type="text" class="form-control{{ $errors->has('request') ? ' is-invalid' : '' }}" name="request" required>

                                        @if ($errors->has('request'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('request') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
                    </div>
                  </div>
                </div>


            @yield('content')

        </main>
    </div>
</body>
</html>
 