<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URequest extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'request',
    ];
}
