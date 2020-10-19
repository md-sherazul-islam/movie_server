@extends('layouts.app')
@section('title', 'Movies | Hindi')
@section('content')

<div class="d-flex justify-content-center align-items-center container ">
<div class="card-columns">
	@foreach($movies as $movie)	
	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" height="199" width="160" src="/images/{{$movie->film_poster}}" alt="Card image cap">
	  <div class="card-body">
	  	<h4><b>{{$movie->name}}</b></h4>
	  	<p>Category : {{$movie->category}}</p>
	  	<p>Size :{{$movie->size}}</p>
	  	<p>Release Year:{{$movie->release_year}}</p>
	    <p class="card-text"></p>
	    <a href="/movies/{{$movie->file_name}}" download><button class="btn btn-primary btn-lg btn-block">Download</button></a>
	    <a href="/movies/{{$movie->file_name}}">
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

@endsection