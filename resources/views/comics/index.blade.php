@extends ('layouts.app')

@section('content')
    <div class="back w-75 mx-auto d-flex justify-content-between mt-5 create">
        <a class="btn btn-warning rounded-3 fw-light btn-sm link-to-create" href="/" role="button">
            <i class="fa fa-home" aria-hidden="true"></i>
        </a>
        <a class="btn btn-warning rounded-3 fw-light btn-sm link-to-create" href="{{ route('comics.create') }}" role="button">
            +
        </a>
    </div>


    <div class="comics_collection_grid container-fluid mt-5 pb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 gy-3 w-75 mx-auto">

            @foreach ($comics as $index => $comic)
                <div class="col p-2">

                    <a class="text-decoration-none" href="{{ route('comics.show', $comic) }}">

                        <div class="card bg-secondary my_card h-100">
                            <img class="card-img-top my_img" src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body text-light fs-3 text fw-bold fst-italic">
                                {{ $comic['title'] }}
                            </div>

                            <div class="card-footer bg-dark d-flex justify-content-between fs-4 align-items-center">

                                <div class="edit-delete flex-fill">
                                    <a class="text-decoration-none" href="{{ route('comics.edit', $comic) }}">
                                        <i class="fa fa-pencil fs-2 py-2 px-1  rounded-2" aria-hidden="true"></i>
                                    </a>

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn mb-2" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $comic->id }}">
                                        <i class="fas fa-trash text-danger p-2 rounded-2 fs-2"></i>
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                        Are you sure you want to delete this item?
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    If you press confirm you are going to delete this item and not be able to recover it.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Confirm
                                                        </button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="price-tag fw-bolder text-success">
                                    {{ $comic['price'] }}
                                </div>

                            </div>

                        </div>

                    </a>
                </div>
            @endforeach
        </div>
        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script>
    </div>
@endsection
