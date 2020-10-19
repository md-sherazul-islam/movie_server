@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-6 col-sm-6">

    <div class="card">
        <div class="card-header">Requests</div>

        <div class="card-body">
          @foreach($requests as $req)
          <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 col-sm-9 float-left">
              <h5>{{$req->name}} <p>{{$req->email}}</p> </h5>
              <h6>{{$req->request}}</h6>
            </div>
              <div class="col-lg-3 col-md-3 col-sm-3 float-right">
                <form action="{{route('requests.destroy',[$req->id])}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="delete">
                  <button class="btn btn-primary" type="submit" name="button">Solved</button>
                </form>
              </div>
          </div><hr>
          @endforeach
        </div>
    </div>
  </div>
</div>
@endsection
