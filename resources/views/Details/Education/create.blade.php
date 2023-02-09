@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Education.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="passing_year">passing_year</label>
        <input type="text" class="form-control" id="passing_year" placeholder="passing_year" name="passing_year">
        @if ($errors->has('passing_year'))
        <span class="error">{{ $errors->first('passing_year') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="session">session</label>
        <input type="text" class="form-control" id="session" placeholder="session" name="session">
        @if ($errors->has('session'))
        <span class="error">{{ $errors->first('session') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="Result">Result</label>
        <input type="text" class="form-control" id="Result" placeholder="Result" name="Result">
        @if ($errors->has('Result'))
        <span class="error">{{ $errors->first('Result') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="Inistitute">Inistitute</label>
        <input type="text" class="form-control" id="Inistitute" placeholder="Inistitute" name="Inistitute">
        @if ($errors->has('Inistitute'))
        <span class="error">{{ $errors->first('Inistitute') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
