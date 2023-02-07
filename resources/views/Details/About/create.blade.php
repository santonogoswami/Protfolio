@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.About.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">proffession</label>
        <input type="text" class="form-control" id="proffession" placeholder="proffession" name="proffession">
      </div>
      <div class="form-group">
        <label for="short_description">short_description</label>
        <input type="text" class="form-control" id="short_description" placeholder="link" name="short_description">
      </div>

      <div class="form-group">
        <label for="long_description">long_description</label>
        <input type="text" class="form-control" id="long_description" placeholder="link" name="long_description">
      </div>

      <div class="form-group">
        <label for="DOB">DOB</label>
        <input type="text" class="form-control" id="DOB" placeholder="link" name="DOB">
      </div>

      <div class="form-group">
        <label for="age">age</label>
        <input type="text" class="form-control" id="age" placeholder="age" name="age">
      </div>
      <div class="form-group">
        <label for="website">website</label>
        <input type="text" class="form-control" id="website" placeholder="website" name="website">
      </div>
      <div class="form-group">
        <label for="degree">degree</label>
        <input type="text" class="form-control" id="degree" placeholder="degree" name="degree">
      </div>
      <div class="form-group">
        <label for="text">phone</label>
        <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" placeholder="email" name="email">
      </div>
      <div class="form-group">
        <label for="city">city</label>
        <input type="text" class="form-control" id="city" placeholder="city" name="city">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
