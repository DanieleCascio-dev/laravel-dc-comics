@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <h1>Comics list</h1>

    @if (Session::has('message'))
    <div class="alert alert-danger" role="alert">

        {{Session::get('message')}}
        
      </div>
      @endif

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
            <form  class="d-inline-block" action="{{ route('comics.destroy',['comic'=>$comic->id])}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>

            </form>
          </td>
        </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection