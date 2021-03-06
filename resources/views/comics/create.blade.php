@extends('layouts.default')

@section('pageTitle', 'Nuovo Prodotto')
    
@section('mainContent')
    <main>
        <div class="container">
            <h1>
                Inserisci comic
            </h1>
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" aria-describedby="title" name='title' placeholder="inserisci titolo">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" aria-describedby="price" name='price' placeholder="Inserisci prezzo">
                </div>
                <div class="mb-3">
                  <label for="series" class="form-label">Serie</label>
                  <input type="text" class="form-control" id="series" aria-describedby="series" name='series' placeholder="inserisci serie">
                </div>
                <div class="mb-3">
                  <label for="sale_date" class="form-label">Sale date</label>
                  <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name='sale_date' placeholder="inserisci sale_date">
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" class="form-control" id="type" aria-describedby="type" name='type'>
                </div>
                <div class="mb-3">
                  <label for="thumb" class="form-label">Image</label>
                  <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name='thumb'>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </main>
@endsection
