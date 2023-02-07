@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.social.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter location" name="name">
      </div>
      <div class="form-group">
        <label for="link">link:</label>
        <input type="text" class="form-control" id="link" placeholder="link" name="link">
      </div>
      <div class="form-group">
        <label for="icon">icon:</label>
        <input type="text" class="form-control" id="icon" placeholder="icon" name="icon">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
