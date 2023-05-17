@extends('layaout.app')

@section('page-title', 'Comics List')

@section('content')

<table class="table table-striped table-success">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>


@endsection