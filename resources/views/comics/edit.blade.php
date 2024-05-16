@extends('layouts.app')

@section('content')
    <div class="container w-75 pt-5 fs-3 pb-5">

        <h1 class="text-warning mb-3">Update your comic</h1>

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="organisation-imgage d-flex justify-content-between">

                <div class="current-image-box h-100 w-75">
                    <div class="mb-3">
                        <label for="title" class="form">Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp"
                            placeholder="Batman and..." value="{{ $comic['title'] }}">
                        <small class="form-text fs-6 text-light">Compile it to change the title of your comic</small>
                    </div>

                    <div class="mb-3 d-flex flex-column align-items-stretch">
                        <label for="" class="form-label">Description</label>
                        <textarea class="form-control" name="description" name="description" id="description" rows="8"
                            placeholder="Amazing comic about...">{{ $comic['description'] }}</textarea>
                        <small class="form-text fs-6 text-light">Compile it to change the description of your comic</small>
                    </div>
                </div>

                <div class="edit_img ms-5 mt-5">
                    <img height="350" src="{{ $comic['thumb'] }}" alt="">
                    <h4 class="mt-2 text-light fw-light bg-info rounded text-center">Current thumb</h4>
                </div>

            </div>


            <div class="mb-3 ">
                <label class="form" for="thumb">Image Address</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="" aria-describedby="titleHelp"
                 value="{{ $comic['thumb'] }}">
                <small class="form-text fs-6 text-light">Compile it to change the image of your comic</small>
            </div>

            <div class="mb-3 ">
                <label class="form" for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="$" id="price"
                    aria-describedby="titleHelp" value="{{ $comic['price'] }}">
                <small class="form-text fs-6 text-light">Compile it to change the price of your comic</small>
            </div>

            <div class="mb-3 ">
                <label class="form" for="series">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="titleHelp"
                    placeholder="Action Comics" value="{{ $comic['series'] }}">
                <small class="form-text fs-6 text-light">Compile it to change the series of your comic</small>
            </div>

            <div class="mb-3 ">
                <label class="form" for="sale_date">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="titleHelp"
                    placeholder="Action Comics" value="{{ $comic['sale_date'] }}"">
                <small class="form-text fs-6 text-light">Compile it to change the sale date of your comic</small>
            </div>

            <div class="mb-3 ">
                <label class="form" for="type">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="titleHelp"
                    placeholder="Comic Book" value="{{ $comic['type'] }}"">
                <small class="form-text fs-6 text-light">Compile it to change the type of your comic</small>

            </div>

            <button type="submit" class="btn btn-warning text-secondary mt-3 fs-4">Update</button>

        </form>

        <div class="back mx-auto text-end">
            <a class="btn btn-warning border border-dark fs-4" href="{{ route('comics.index') }}"
                role="button">
                Cancel
            </a>
        </div>

    </div>
@endsection
