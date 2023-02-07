@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.About.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">proffession:</label>
        <input type="text" class="form-control" id="proffession" value="{{$data->proffession}}"  placeholder="Enter proffession" name="proffession">
      </div>
      <div class="form-group">
        <label for="link">short_description:</label>
        <input type="text" class="form-control" id="short_description" value="{{$data->short_description}}"  placeholder="short_description" name="short_description">
      </div>

      <div class="form-group">
        <label for="link">long_description:</label>
        <input type="text" class="form-control" id="long_description" value="{{$data->long_description}}"  placeholder="long_description" name="long_description">
      </div>

      <div class="form-group">
        <label for="link">DOB:</label>
        <input type="text" class="form-control" id="DOB" value="{{$data->DOB}}"  placeholder="DOB" name="DOB">
      </div>

      <div class="form-group">
        <label for="age">age:</label>
        <input type="text" class="form-control" id="age" value="{{$data->age}}"  placeholder="age" name="age">
      </div>

      <div class="form-group">
        <label for="website">website:</label>
        <input type="text" class="form-control" id="website" value="{{$data->website}}"  placeholder="website" name="website">
      </div>
      <div class="form-group">
        <label for="degree">degree:</label>
        <input type="text" class="form-control" id="degree" value="{{$data->degree}}"  placeholder="degree" name="degree">
      </div>

      <div class="form-group">
        <label for="phone">phone:</label>
        <input type="text" class="form-control" id="phone" value="{{$data->phone}}"  placeholder="phone" name="phone">
      </div>

      <div class="form-group">
        <label for="email">email:</label>
        <input type="text" class="form-control" id="email" value="{{$data->email}}"  placeholder="email" name="email">
      </div>

      <div class="form-group">
        <label for="city">city:</label>
        <input type="text" class="form-control" id="city" value="{{$data->city}}"  placeholder="city" name="city">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
