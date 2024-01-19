@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h1>Comics list</h1>
    <div class="text-end">
      <a class="btn btn-success" href="{{route('comics.create')}}">New Comic</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Sale Date</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
        
        <tr>
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->sale_date }}</td>
          <td>
            <a class="btn btn-success" href="{{ route('comics.show', $comic->id)}}">Details</a>
            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id)}}">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
          </td>
        </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection