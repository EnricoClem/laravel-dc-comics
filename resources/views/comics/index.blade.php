@extends('layout.app')

@section('title', 'Our comics!')

@section('content')

<main>
    <div class="container">

        <h1>Vista: index</h1>
        
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
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>


@endsection