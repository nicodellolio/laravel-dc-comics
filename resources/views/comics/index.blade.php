@extends('layouts.app')

@section('content')
    
    <ul class="">

        @foreach ($comics as $comic)
            <li>
                {{$comic->title}}
            </li>
        @endforeach
        
    </ul>
@endsection