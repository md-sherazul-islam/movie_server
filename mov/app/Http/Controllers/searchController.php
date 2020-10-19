<?php

namespace App\Http\Controllers;

use App\Search;
use App\Movie;
use Laravel\Scout\Builder;
use Laravel\Scout\EngineManager;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search($query)
    {
        $movies = Movie::search('$query')->get();
        return view('search',compact($movies));
    }

}
