@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Contact.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name:</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter name" name="name">
      </div>

      <div class="form-group">
        <label for="text">email:</label>
        <input type="text" class="form-control" id="email" value="{{$data->passing_year}}"  placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="text">subject:</label>
        <input type="text" class="form-control" id="subject" value="{{$data->subject}}"  placeholder="Enter session" name="subject">
      </div>

      <div class="form-group">
        <label for="text">message:</label>
        <input type="text" class="form-control" id="message" value="{{$data->message}}"  placeholder="Enter message" name="message">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
