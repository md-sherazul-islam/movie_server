<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'name', 
        'size', 
        'file_name',
        'film_poster',
        'category',
        'release_year',
        'uploaded_by',
        'total_download',
    ];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
