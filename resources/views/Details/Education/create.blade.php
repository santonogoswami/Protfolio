@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Education.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
      </div>
      <div class="form-group">
        <label for="passing_year">passing_year</label>
        <input type="text" class="form-control" id="passing_year" placeholder="passing_year" name="passing_year">
      </div>

      <div class="form-group">
        <label for="session">session</label>
        <input type="text" class="form-control" id="session" placeholder="session" name="session">
      </div>

      <div class="form-group">
        <label for="Result">Result</label>
        <input type="text" class="form-control" id="Result" placeholder="Result" name="Result">
      </div>
      <div class="form-group">
        <label for="Inistitute">Inistitute</label>
        <input type="text" class="form-control" id="Inistitute" placeholder="Inistitute" name="Inistitute">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
