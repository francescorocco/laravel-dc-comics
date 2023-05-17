@extends('layouts.app')

@section('page-title', 'Create Comic')

@section('content')

    <form method="POST" action="{{route('comics.store')}}">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nome del fumetto</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Url immagine fumetto</label>
            <input type="text" class="form-control" id="thumb " name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo del fumetto</label>
            <input type="text" class="form-control" id="price " name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie del fumetto</label>
            <input type="text" class="form-control" id="series " name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data vendita del fumetto</label>
            <input type="date" class="form-control" id="sale_date " name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia fumetto</label>
            <input type="text" class="form-control" id="type " name="type">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione del fumetto</label>
            <textarea class="form-control" id="description " name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

@endsection