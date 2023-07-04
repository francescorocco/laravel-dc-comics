@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

<a href="{{route('comics.create')}}" class="btn btn-primary">Crea nuovo Fumetto</a>

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
            <td class="d-flex"> 
              <a class="btn m-2 btn-primary" href="{{route('comics.show',  ['comic'=>$comic->id])}}">Dettagli</a>
              <a class="btn m-2 btn-secondary" href="{{route('comics.edit',  ['comic'=>$comic->id])}}">Modifica</a>
              <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" class="btn" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
              </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>


@endsection