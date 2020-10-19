@extends('layouts.app')
@section('title', 'Movies')
@section('content')
 <!--Slide Show Begins -->

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
@endsection
