@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.About.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">proffession</label>
        <input type="text" class="form-control" id="proffession" placeholder="proffession" name="proffession">
        @if ($errors->has('proffession'))
        <span class="error">{{ $errors->first('proffession') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="short_description">short_description</label>
        <input type="text" class="form-control" id="short_description" placeholder="link" name="short_description">
        @if ($errors->has('short_description'))
        <span class="error">{{ $errors->first('short_description') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="long_description">long_description</label>
        <input type="text" class="form-control" id="long_description" placeholder="link" name="long_description">
        @if ($errors->has('long_description'))
        <span class="error">{{ $errors->first('long_description') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="DOB">DOB</label>
        <input type="date" class="form-control" id="DOB" placeholder="link" name="DOB">
        @if ($errors->has('DOB'))
        <span class="error">{{ $errors->first('DOB') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="age">age</label>
        <input type="text" class="form-control" id="age" placeholder="age" name="age">
        @if ($errors->has('age'))
        <span class="error">{{ $errors->first('age') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="website">website</label>
        <input type="text" class="form-control" id="website" placeholder="website" name="website">
        @if ($errors->has('website'))
        <span class="error">{{ $errors->first('website') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="degree">degree</label>
        <input type="text" class="form-control" id="degree" placeholder="degree" name="degree">
        @if ($errors->has('degree'))
        <span class="error">{{ $errors->first('degree') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text">phone</label>
        <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
        @if ($errors->has('phone'))
        <span class="error">{{ $errors->first('phone') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" placeholder="email" name="email">
        @if ($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="city">city</label>
        <input type="text" class="form-control" id="city" placeholder="city" name="city">
        @if ($errors->has('city'))
        <span class="error">{{ $errors->first('city') }}</span>
    @endif
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
