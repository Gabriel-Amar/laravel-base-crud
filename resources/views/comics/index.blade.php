@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('mainContent')
<div class="container">
    <h1>
        Comics
    </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Visualizza</th>
            <th scope="col">Modifica</th>
            <th scope="col">Cancella</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}" class="btn btn-info">Visualizza</a></td>
                <td><a href="" class="btn btn-warning">Modifica</a></td>
                <td><a href="" class="btn btn-danger">Cancella</a></td>
                </tr>
                
            @endforeach
          
        </tbody>
      </table>
</div>
</main>
@endsection
    
