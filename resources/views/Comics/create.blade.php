@extends('layout.main')

@section('content')
    <form action="{{route('comics.store')}}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" id="thumb">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" type="text" class="form-control" id="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Giorno D'uscita</label>
            <input name="sale_date" type="text" class="form-control" id="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input name="type" type="text" class="form-control" id="type">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input name="artists[]" type="text" class="form-control" id="artists">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scritori</label>
            <input name="writers[]" type="text" class="form-control" id="writers">
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
