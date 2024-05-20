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
                <th scope="col">Azioni</th>

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
                            <li>{{ $artist }}</li>
                        @endforeach
                    </td>

                    <td>
                        @foreach (json_decode($comic->writers) as $writer)
                            <li>{{ $writer }}</li>
                        @endforeach
                    </td>

                    <td class="d-flex">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success "><i class="fa-solid fa-eye -3 "></i></a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-danger "><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="container" onsubmit="return confirm('sei sicuro di voler cancellare {{$comic->title}} ')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>



                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
