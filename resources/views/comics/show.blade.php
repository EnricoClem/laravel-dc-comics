@extends('layout.app')

@section('title', 'Our comics!')

@section('content')

<main>
    <section>
        <div class="container">

            <h1>Vista: show</h1>

            <div>
               <h2>{{ $comic->title }}</h2> 
               <img src="{{ $comic->thumb }}" alt="">
               <h3>Series: {{ $comic->series }}</h3>
               <p>{{ $comic->description }}</p>
               <h4>Other info:</h4>
               <ul>
                <li>Type: {{ $comic->type }}</li>
                <li>Price: {{ $comic->price }}</li>
                <li>Release date: {{ $comic->sale_date }}</li>
               </ul>
            </div>
        </div>
    </section>
</main>

@endsection