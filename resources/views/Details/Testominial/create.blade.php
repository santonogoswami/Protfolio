@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Testominial.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="designation">designation:</label>
        <input type="text" class="form-control" id="designation" placeholder="designation" name="designation">
        @if ($errors->has('designation'))
        <span class="error">{{ $errors->first('designation') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="testominial">testominial:</label>
        <input type="text" class="form-control" id="testominial" placeholder="testominial" name="testominial">
        @if ($errors->has('testominial'))
        <span class="error">{{ $errors->first('testominial') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
