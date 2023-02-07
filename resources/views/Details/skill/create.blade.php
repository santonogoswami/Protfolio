@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.skill.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">skill_name</label>
        <input type="text" class="form-control" id="skill_name" placeholder="skill_name" name="skill_name">
      </div>
      <div class="form-group">
        <label for="link">skill_level</label>
        <input type="text" class="form-control" id="skill_level" placeholder="link" name="skill_level">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
