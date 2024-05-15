
@extends ('layouts.app')

@section('content')

<div class="back w-75 mx-auto text-end mt-5 create">
    <a class="btn btn-warning rounded-3 fw-light btn-sm link-to-create" href="{{route('comics.create')}}" role="button">
        +
    </a>
</div>
    
<div class="comics_collection_grid container-fluid mt-5">
    <div class="row row-cols-3 row-cols-xxl-4 gy-3 w-75 mx-auto">

        @foreach ($comics as $index => $comic)
        <div class="col p-2">

            <a class="text-decoration-none" href="{{route('comics.show', $comic)}}">

                <div class="card bg-secondary my_card h-100">
                    <img class="card-img-top my_img" src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-light fs-3 text fw-bold fst-italic">
                        {{$comic['title']}}
                    </div>
                    <div class="card-footer text-end fw-bolder text-success bg-light fs-4">
                        
                        {{$comic['price']}}
                    </div>
                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
