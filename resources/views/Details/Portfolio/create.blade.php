@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Portfolio.store')}}" method="post" enctype="multipart/form-data">
        @csrf

      <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="link">link:</label>
        <input type="text" class="form-control" id="link" placeholder="link" name="link">
        @if ($errors->has('link'))
        <span class="error">{{ $errors->first('link') }}</span>
    @endif

      </div>
      <div class="form-group">
        <label for="image">image:</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
