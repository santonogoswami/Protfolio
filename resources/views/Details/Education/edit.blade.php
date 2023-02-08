@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Education.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name:</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter name" name="name">
      </div>

      <div class="form-group">
        <label for="text">passing_year:</label>
        <input type="text" class="form-control" id="passing_year" value="{{$data->passing_year}}"  placeholder="Enter passing_year" name="passing_year">
      </div>

      <div class="form-group">
        <label for="text">session:</label>
        <input type="text" class="form-control" id="session" value="{{$data->session}}"  placeholder="Enter session" name="session">
      </div>

      <div class="form-group">
        <label for="text">Result:</label>
        <input type="text" class="form-control" id="skill_name" value="{{$data->Result}}"  placeholder="Enter Result" name="Result">
      </div>
      <div class="form-group">
        <label for="link">Inistitute:</label>
        <input type="text" class="form-control" id="Inistitute" value="{{$data->skill_level}}"  placeholder="Inistitute" name="Inistitute">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
