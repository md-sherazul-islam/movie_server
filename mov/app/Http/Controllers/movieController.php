<?php

namespace App\Http\Controllers;

use App\Movie;
use File;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $total_movies = Movie::count();
        $logged_in = Auth::check();
        $slides = Slide::all();
        $movies = Movie::latest()->paginate(30);
        return view('index',['movies'=>$movies, 'logged_in'=>$logged_in,'t_mov'=>$total_movies, 'slides'=>$slides ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'poster'=>'required',
        ]);

        if($request->hasFile('poster') && $request->hasFile('movie') )
        {

            $poster = $request->file('poster');

            $poster->move('images',$poster->getClientOriginalName());

            $movie = $request->file('movie');
            $movie->move('movies',$movie->getClientOriginalName());

            //echo '<img src="images/'.$image->getClientOriginalName().'"/>';
            $movie_store = Movie::create([
                        'name'          =>$request->input('movie_name') ,
                        'size'          =>number_format($request->file('movie')->getClientSize()/1000000, 0, ".", "") .'MB',
                        'file_name'     =>$movie->getClientOriginalName(),
                        'film_poster'   => $poster->getClientOriginalName(),
                        'category'      => $request->input('category'),
                        'release_year'  =>$request->input('release_year'),
                        'uploaded_by'   =>Auth::user()->id,
                        'total_download'=>'0',
                    ]);
            if($movie_store) {
                return back()->with('success','Movie Uploaded Successfully');
            } else{
                return back()->with('errors','ERROR!!! Could not Upload');
            }

        }
    }

    public function search(Request $request)
    {
        $movies = Movie::where('name','like','%'.$request->input('search').'%') ->get();
        $logged_in = Auth::check();

        return view('search',['movies'=>$movies, 'logged_in'=>$logged_in]);
    }

    public function english(Request $request)
    {
        $movies = Movie::where('category','like','%'.'english'.'%') ->get();
        $logged_in = Auth::check();

        return view('english',['movies'=>$movies, 'logged_in'=>$logged_in]);
    }

    public function hindi(Request $request)
    {
        $movies = Movie::where('category','like','%'.'hindi'.'%') ->get();
        $logged_in = Auth::check();

        return view('hindi',['movies'=>$movies, 'logged_in'=>$logged_in]);
    }

    public function bangla(Request $request)
    {
        $movies = Movie::where('category','like','%'.'bangla'.'%') ->get();
        $logged_in = Auth::check();

        return view('bangla',['movies'=>$movies , 'logged_in'=>$logged_in]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        $mov = Movie::where('id',$movie->id)->first();

        return view('watch',['movie'=>$mov]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movies = Movie::find($movie->id);

           // Storage::delete($movies->film_poster);
           // Storage::delete('movies/'.$movies->file_name);

         //   unlink('public/images/'.$movies->film_poster);
        File::delete('images/'.$movies->film_poster);
        File::delete('movies/'.$movies->file_name);

            if($movies->delete() ) {
            return redirect()->back()
                    ->with('success','Project Deleted');
        }
        return back()->with('errors','ERROR!! Couldn`t Delete Project');


    }

    public function deleteMovie($id)
    {
        $movies = Movie::find($id);



        if($movies->delete()){
            return redirect()->back()
                    ->with('success','Project Deleted');
        }
        return back()->with('errors','ERROR!! Couldn`t Delete Project');

        /*if(Storage::delete('images/'.$movie->film_poster) &&
            Storage::delete('movies/'.$movie->file_name) )
            {
                return redirect()->back()->with('success','Deleted');
            }*/

    }

    public function watch(Movie $movie)
    {

    }
}
