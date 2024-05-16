
@extends ('layouts.app')

@section('content')

<div class="back w-75 mx-auto d-flex justify-content-between mt-5 create">
    <a class="btn btn-warning rounded-3 fw-light btn-sm link-to-create" href="/" role="button">
        <i class="fa fa-home" aria-hidden="true"></i>
    </a>
    <a class="btn btn-warning rounded-3 fw-light btn-sm link-to-create" href="{{route('comics.create')}}" role="button">
        +
    </a>
</div>

    
<div class="comics_collection_grid container-fluid mt-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 gy-3 w-75 mx-auto">

        @foreach ($comics as $index => $comic)
        <div class="col p-2">

            <a class="text-decoration-none" href="{{route('comics.show', $comic)}}">

                <div class="card bg-secondary my_card h-100">
                    <img class="card-img-top my_img" src="{{$comic['thumb']}}" alt="">
                    <div class="card-body text-light fs-3 text fw-bold fst-italic">
                        {{$comic['title']}}
                    </div>
                    
                    <div class="card-footer bg-dark d-flex justify-content-between fs-4">

                        <div class="edit-delete flex-fill">
                            <a href="{{route('comics.edit', $comic)}}"><i class="fa fa-pencil fs-2 me-2" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-trash fs-2 text-primary p-1" aria-hidden="true"></i></a>
                        </div>

                        <div class="price-tag fw-bolder text-success">
                            {{$comic['price']}}
                        </div>

                    </div>

                </div>

            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
