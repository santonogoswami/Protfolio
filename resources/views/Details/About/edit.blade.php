@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.About.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">proffession:</label>
        <input type="text" class="form-control" id="proffession" value="{{$data->proffession}}"  placeholder="Enter proffession" name="proffession">
        @if ($errors->has('proffession'))
        <span class="error">{{ $errors->first('proffession') }}</span>
    @endif
    </div>
      <div class="form-group">
        <label for="link">short_description:</label>
        <input type="text" class="form-control" id="short_description" value="{{$data->short_description}}"  placeholder="short_description" name="short_description">
        @if ($errors->has('short_description'))
        <span class="error">{{ $errors->first('short_description') }}</span>
    @endif
    </div>

      <div class="form-group">
        <label for="link">long_description:</label>
        <input type="text" class="form-control" id="long_description" value="{{$data->long_description}}"  placeholder="long_description" name="long_description">
        @if ($errors->has('long_description'))
        <span class="error">{{ $errors->first('long_description') }}</span>
    @endif
   </div>

      <div class="form-group">
        <label for="link">DOB:</label>
        <input type="date" class="form-control" id="DOB" value="{{$data->DOB}}"  placeholder="DOB" name="DOB">
        @if ($errors->has('DOB'))
        <span class="error">{{ $errors->first('DOB') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="age">age:</label>
        <input type="text" class="form-control" id="age" value="{{$data->age}}"  placeholder="age" name="age">
        @if ($errors->has('age'))
        <span class="error">{{ $errors->first('age') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="website">website:</label>
        <input type="text" class="form-control" id="website" value="{{$data->website}}"  placeholder="website" name="website">
        @if ($errors->has('website'))
        <span class="error">{{ $errors->first('website') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="degree">degree:</label>
        <input type="text" class="form-control" id="degree" value="{{$data->degree}}"  placeholder="degree" name="degree">
        @if ($errors->has('degree'))
        <span class="error">{{ $errors->first('degree') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="phone">phone:</label>
        <input type="text" class="form-control" id="phone" value="{{$data->phone}}"  placeholder="phone" name="phone">
        @if ($errors->has('phone'))
        <span class="error">{{ $errors->first('phone') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="email">email:</label>
        <input type="text" class="form-control" id="email" value="{{$data->email}}"  placeholder="email" name="email">
        @if ($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
      </div>

      <div class="form-group">
        <label for="city">city:</label>
        <input type="text" class="form-control" id="city" value="{{$data->city}}"  placeholder="city" name="city">
        @if ($errors->has('city'))
        <span class="error">{{ $errors->first('city') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
