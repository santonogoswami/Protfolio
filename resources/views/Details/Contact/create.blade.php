@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Contact.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>

      <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
      </div>

      <div class="form-group">
        <label for="subject">subject</label>
        <input type="text" class="form-control" id="subject" placeholder="subject" name="subject">
      </div>
      <div class="form-group">
        <label for="message">message</label>
        <input type="text" class="form-control" id="message" placeholder="message" name="message">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
