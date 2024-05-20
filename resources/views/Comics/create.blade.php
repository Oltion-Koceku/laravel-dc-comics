@extends('layout.main')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger text-center w-25 container">
            @foreach ($errors->all() as $error)
                <h3>{{ $error }}</h3>
            @endforeach
        </div>
    @endif


    <form action="{{ route('comics.store') }}" method="POST" class="container create">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{ old('title') }}">
            {{-- con @error message funziona --}}
            @error('title')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror



        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{ old('thumb') }}">
            @error('thumb')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" type="text" class="form-control" id="description" value="{{ old('description') }}"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">
            @error('price')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{ old('series') }}">
            @error('series')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Giorno D'uscita</label>
            <input name="sale_date" type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') }}">
            @error('type')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input name="artists[]" type="text" class="form-control @error('artists.*') is-invalid @enderror" id="artists" value="{{ old('artists.*') }}">
            @error('artists.*')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scritori</label>
            <input name="writers[]" type="text" class="form-control @error('writers.*') is-invalid @enderror" id="writers" value="{{ old('writers.*') }}">
            @error('writers.*')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    <h3>{{ $message }}</h3>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary p-4 ">Invia</button>
    </form>
@endsection
