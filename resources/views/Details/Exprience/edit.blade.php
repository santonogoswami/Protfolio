@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Exprience.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">company</label>
        <input type="text" class="form-control" id="company" value="{{$data->company}}"  placeholder="Enter company" name="company">
        @if ($errors->has('company'))
        <span class="error">{{ $errors->first('company') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text">designation</label>
        <input type="text" class="form-control" id="designation" value="{{$data->designation}}"  placeholder="Enter designation" name="designation">
        @if ($errors->has('designation'))
        <span class="error">{{ $errors->first('designation') }}</span>
    @endif
    </div>
      <div class="form-group">
        <label for="text">form</label>
        <input type="text" class="form-control" id="form" value="{{$data->form}}"  placeholder="Enter form" name="form">
        @if ($errors->has('form'))
        <span class="error">{{ $errors->first('form') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text">to</label>
        <input type="text" class="form-control" id="to" value="{{$data->to}}"  placeholder="Enter to" name="to">
        @if ($errors->has('to'))
        <span class="error">{{ $errors->first('to') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="link">description:</label>
        <input type="text" class="form-control" id="description" value="{{$data->description}}"  placeholder="description" name="description">
        @if ($errors->has('description'))
        <span class="error">{{ $errors->first('description') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>



@endsection
