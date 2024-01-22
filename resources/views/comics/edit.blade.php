@extends('layouts.app')

@section('content')
  <div class="container py-5">
    
    <h1>Modifica: {{$comic->title}}</h1>

    @if ($errors->any())
      <div class="alert alert-danger mt-3">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
          @endforeach
      </ul>
      </div>
    @endif

    <form action="{{route('comics.update', ['comic'=>$comic->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row justify-content-center py-5">
        <div class="col-6">
  
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $comic->title }}" >
          </div>
  
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') ?? $comic->image }}" >
          </div>
  
          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ?? $comic->series}}" >
          </div>
  
          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date}}" >
          </div>
  
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ?? $comic->price }}">
          </div>
  
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            {{-- <input type="text" class="form-control" id="type" name="type" > --}}
            <select name="type" id="type">
              <option value="">Select one type</option>
              <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">Graphic novel</option>
              <option @selected(old('type',$comic->type) === 'comic book') value="comic book">Comic Book</option>
            </select>
          </div>
  
          <div class="form">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" style="height: 100px"> {{ old('description') ?? $comic->description }}</textarea>
          </div>
  
  
          <button type="submit" class="btn btn-success mt-3">Save</button>
  
        </div>
      </div>
  
  
    </form>
  </div>
@endsection