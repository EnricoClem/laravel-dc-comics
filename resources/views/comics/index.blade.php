@extends('layout.app')

@section('title', 'Our comics!')

@section('content')

<main>
    <div class="container">

        <h1>Vista: index</h1>

        <div>
            <button class="card mb-3 p-2">
                <a href="{{ route('comics.create') }}">Add a new comic.</a>
            </button>
        </div>
        
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Release date</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>
                            <a href="{{ route('comics.show', $comic ) }}">{{ $comic->title }}</a>
                        </td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('comics.edit',$comic) }}">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>


@endsection