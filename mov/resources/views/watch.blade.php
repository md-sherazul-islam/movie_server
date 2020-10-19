@extends('layouts.app')
  <div class="col-lg-8 col-md-8 col-sm-8">
    <video height="500" width="600" controls>
      <source src="/movies/{{$movie->file_name}}" type="video/mp4">
    </video>
  </div>
