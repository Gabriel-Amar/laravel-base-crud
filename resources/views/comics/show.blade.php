@extends('layouts.default')

@section('pageTitle', 'Comic')
    
@section('mainContent')
    <main>
        <div class="container">
            <h1>
                {{$comic->title}}
            </h1>
            <div>
                <img src="{{$comic->thumb}}" alt="" class="img-fluid">
            </div>
            <p>{{$comic->description}}</p>
        </div>
    </main>
@endsection