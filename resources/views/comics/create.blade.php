@extends('layouts.app')

@section('title')
Create your own comic
@endsection

@section('content')

    <div class="container w-75 pt-5 fs-3">

        <h1 class="text-warning mb-3">Add a new Comic</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
    
            <div class="mb-3">
                <label for="title" class="form">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Batman and...">
            </div>
    
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="description" name="description" id="description" rows="3" placeholder="Amazing comic about..."></textarea>
            </div>
    
            <div class="mb-3 ">
                <label class="form" for="thumb">Image Address</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="titleHelp" value="https://">
            </div>
    
            <div class="mb-3 ">
                <label class="form" for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="titleHelp" value="$">
            </div>
    
            <div class="mb-3 ">
                <label class="form" for="series">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="titleHelp" placeholder="Action Comics">
            </div>
    
            <div class="mb-3 ">
                <label class="form" for="sale_date">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="titleHelp" placeholder="2024-05-05">
            </div>
    
            <div class="mb-3 ">
                <label class="form" for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="titleHelp" placeholder="Comic Book">
            </div>
    
            <button type="submit" class="btn btn-warning text-secondary mt-3 fs-4">Submit</button>
        </form>

    </div>
    <div class="back w-75 mx-auto mt-1 text-end">
        <a class="btn btn-warning rounded-3 fw-light btn-sm fs-2 px-3 py-1" href="{{route('comics.index')}}" role="button">
            Go back
        </a>
    </div>

@endsection
