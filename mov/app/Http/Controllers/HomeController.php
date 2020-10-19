<?php

namespace App\Http\Controllers;

use App\Movie;
use File;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $total_movies = Movie::count();
      $logged_in = Auth::check();
      $slides = Slide::all();
      $movies = Movie::latest()->paginate(30);
      return view('home',['movies'=>$movies, 'logged_in'=>$logged_in,'t_mov'=>$total_movies, 'slides'=>$slides ]);
    }
}
