@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <div class="row">

      <div class="col-4 d-flex justify-content-center">

        <div>
          <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
        </div>

      </div>

        <div class="col-4">

          <div class="_info">
            <h2>
              {{ $comic->title }}
            </h2>
            <p>{{ $comic->description }}</p>
            <ul>
              <li><strong>Series: </strong>{{ $comic->series }}</li>
              <li><strong>Sale date: </strong>{{ $comic->sale_date }}</li>
              <li><strong>Price: </strong>{{ $comic->price }}</li>
              <li><strong>Type: </strong>{{ $comic->type }}</li>
            </ul>
      
          </div>
        </div>
     
    </div>
   
  </div>
@endsection