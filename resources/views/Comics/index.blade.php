@extends('layout.main')

@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">title</th>
                <th scope="col">thumb</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
                <th scope="col">artists</th>
                <th scope="col">writers</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td><img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                    <td>{{ $comic->description }}</td>
                    <td>&euro;{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>

                    <td>
                        {{-- li ho ricodificati in array cosi posso ciclarli, perche nei seeder li avevo trasformati in strighe --}}
                        @foreach (json_decode($comic->artists) as $artist)
                            {{ $artist }},
                        @endforeach
                    </td>

                    <td>
                        @foreach (json_decode($comic->writers) as $writer)
                            {{ $writer }},
                        @endforeach
                    </td>



                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
