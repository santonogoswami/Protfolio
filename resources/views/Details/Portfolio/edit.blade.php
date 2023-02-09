@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Portfolio.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text">link</label>
        <input type="text" class="form-control" id="link" value="{{$data->link}}"  placeholder="Enter link" name="link">
        @if ($errors->has('link'))
        <span class="error">{{ $errors->first('link') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="photo">photo:</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
        <img src="{{asset($data->image)}}" alt="" width="100px" height="100px">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>



@endsection
