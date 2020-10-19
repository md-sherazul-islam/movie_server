@extends('layouts.app')
@section('content')
<div class="col-lg-8 col-md-8 col-sm8 float-right">
<div class="card">
<div class="card text-center">
  <div class="card-header">
    <b>Upload Slide Show</b>
  </div>
</div>
  <div class="card-body">
<form method="POST" action="{{ route('slides.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Movie Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('movie_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('movie_name') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Upload Poster') }}</label>

        <div class="col-md-6">
            <input id="image" type="file" class="form-control" name="image" required>
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

@endsection
