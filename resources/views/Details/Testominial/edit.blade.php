@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Testominial.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name:</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter name" name="name">
      </div>
      <div class="form-group">
        <label for="designation">designation:</label>
        <input type="text" class="form-control" id="designation" value="{{$data->designation}}"  placeholder="designation" name="designation">
      </div>
      <div class="form-group">
        <label for="testominial">testominial:</label>
        <input type="text" class="form-control" id="testominial" value="{{$data->testominial}}"  placeholder="testominial" name="testominial">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
