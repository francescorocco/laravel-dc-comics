@extends('layouts.app')

@section('page-title', 'Dettagli Comic')

@section('content')

<div class="card">
  
    <div class="w-75">
      <img src="{{$comic->thumb}}" class="card-img-top w-25" alt="{{$comic->title}}">
    </div>
    
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <p class="card-text">{{$comic->title}}</p>
      <p class="card-text">{{$comic->description}}</p>
      <p class="card-text">{{$comic->price}}</p>
      <p class="card-text">{{$comic->series}}</p>
      <p class="card-text">{{$comic->sale_date}}</p>
      <p class="card-text">{{$comic->type}}</p>
    </div>

    <a class="btn btn-warning" href="{{route('comics.index')}}">Torna alla lista</a>
  </div>

@endsection