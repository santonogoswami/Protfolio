@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.skill.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">skill_name:</label>
        <input type="text" class="form-control" id="skill_name" value="{{$data->skill_name}}"  placeholder="Enter skill_name" name="skill_name">
        @if ($errors->has('skill_name'))
        <span class="error">{{ $errors->first('skill_name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="link">skill_level:</label>
        <input type="text" class="form-control" id="skill_level" value="{{$data->skill_level}}"  placeholder="skill_level" name="skill_level">
        @if ($errors->has('skill_level'))
        <span class="error">{{ $errors->first('skill_level') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
