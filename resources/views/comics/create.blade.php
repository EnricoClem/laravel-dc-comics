@extends('layout.app')

@section('title', 'Our comics!')

@section('content')

<main>
    <section>
        <div class="container">

            <h1>Vista: create</h1>

            <div>
                <h2>Add a new comic</h2>
            </div>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="comic title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Describe the comic</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url image</label>
                    <input type="text" name="thumb" class="form-control" id="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" name="series" class="form-control" id="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Release date</label>
                    <input type="text" name="sale_date" class="form-control" id="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" id="type">
                </div>
                <button class="btn btn-primary">Crea</button>
            </form>
        </div>
    </section>
</main>

@endsection