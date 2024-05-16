@extends('layout.main')

@section('content')
    <div class="w-25 container " style="width: 18rem;">
        <img src="{{ $data->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $data->title }}</h5>
            <p class="card-text">{{ $data->description }}</p>
            <p>{{ $data->price }}</p>
            <p>{{ $data->type }}</p>
            <p>{{ $data->sale_date }}</p>

            <p>
                @foreach (json_decode($data->artists) as $artist)
                    {{ $artist }},
                @endforeach
            </p>
            <p>
                @foreach (json_decode($data->writers) as $writer)
                    {{ $writer }},
                @endforeach
            </p>

        </div>
    </div>
@endsection
