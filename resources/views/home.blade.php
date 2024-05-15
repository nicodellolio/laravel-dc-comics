@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="mt-5 home-title">
            Hello Buddy!
            <br>
            <br>
            Here to see some comics?
        </h1>
        <h1 class="to-the-comics">
            <a class="text-decoration-none text-light" href="{{route('comics.index')}}">Give a look to our best seller! 👈🏼</a>
        </h1>
        <h3 class="text-primary">
            You might have a chance to create your own personal one!
        </h3>
    </div>
@endsection