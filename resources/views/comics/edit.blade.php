@extends('layouts.default')

@section('pageTitle', 'Nuovo Prodotto')
    
@section('mainContent')
    <main>
        <div class="container">
            <h1>
                Modifica comic
            </h1>
            <form action="{{route('comics.update', $comic->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" aria-describedby="title" name='title' value='{{$comic->title}}'>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" name="description" id="description" cols="30" rows="10">value='{{$comic->description}}'</textarea>
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" aria-describedby="price" name='price' value='{{$comic->price}}'>
                </div>
                <div class="mb-3">
                  <label for="series" class="form-label">Serie</label>
                  <input type="text" class="form-control" id="series" aria-describedby="series" name='series' value='{{$comic->series}}'>
                </div>
                <div class="mb-3">
                  <label for="sale_date" class="form-label">Sale date</label>
                  <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name='sale_date' value='{{$comic->sale_date}}'>
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" aria-describedby="type" name='type' value='{{$comic->type}}'>
                </div>
                <div class="mb-3">
                  <label for="thumb" class="form-label">Image</label>
                  <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name='thumb' value='{{$comic->thumb}}'>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </main>
@endsection
