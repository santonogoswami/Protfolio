@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.webSetting.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">location:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter location" name="location">
      </div>
      <div class="form-group">
        <label for="email">email:</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
      </div>
      <div class="form-group">
        <label for="call">call:</label>
        <input type="text" class="form-control" id="call" placeholder="call" name="call">
      </div>
      <div class="form-group">
        <label for="call">google_map:</label>
        <input type="text" class="form-control" id="google_map" placeholder="call" name="google_map">
      </div>
      <div class="form-group">
        <label for="photo">photo:</label>
        <input type="file" class="form-control" id="photo" placeholder="photo" name="photo">
      </div>
      <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
