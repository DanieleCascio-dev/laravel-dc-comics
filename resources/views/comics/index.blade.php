@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Sale Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
        
        <tr>
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->sale_date }}</td>
        </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection