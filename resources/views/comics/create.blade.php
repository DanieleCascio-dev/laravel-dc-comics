@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">

    <div class="row justify-content-center py-5">
      <div class="col-6">

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" >
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="text" class="form-control" id="image" name="image" >
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" name="series" >
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale date</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" >
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control" id="price" name="price" >
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control" id="type" name="type" >
        </div>

        <div class="form-floating">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
        </div>


        <button type="submit" class="btn btn-success mt-3">Salve</button>

      </div>
    </div>


  </form>

</div>
@endsection