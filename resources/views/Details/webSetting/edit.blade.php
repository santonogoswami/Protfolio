@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div></div>
                <div class="card-body">
               <a href="{{route('Details.webSetting.index')}}"> Edit</a>
                   <br>

                   <form method="POST" action="{{ route('Details.webSetting.update',$data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="text">location:</label>
                        <input type="text" class="form-control" id="email" value="{{$data->location}}" placeholder="Enter location" name="location">
                        @if ($errors->has('location'))
                        <span class="error">{{ $errors->first('location') }}</span>
                    @endif
                      </div>
                      <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" id="email" value="{{$data->email}}" placeholder="email" name="email">
                        @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                    @endif

                    </div>
                      <div class="form-group">
                        <label for="call">call:</label>
                        <input type="text" class="form-control" id="call" value="{{$data->call}}" placeholder="call" name="call">
                        @if ($errors->has('call'))
                             <span class="error">{{ $errors->first('call') }}</span>
                          @endif
                      </div>
                      <div class="form-group">
                        <label for="call">google_map:</label>
                        <input type="text" class="form-control" id="google_map" value="{{$data->google_map}}" placeholder="call" name="google_map">
                        @if ($errors->has('google_map'))
                        <span class="error">{{ $errors->first('google_map') }}</span>
                    @endif
                    </div>
                      <div class="form-group">
                        <label for="photo">photo:</label>
                        <input type="file" class="form-control" id="photo" placeholder="photo" name="photo">
                        <img src="{{asset($data->photo)}}" alt="" width="100px" height="100px">
                        @if ($errors->has('photo'))
                         <span class="error">{{ $errors->first('photo') }}</span>
                         @endif
                      </div>
                      <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" class="form-control" id="name" value="{{$data->name}}" placeholder="name" name="name">
                        @if ($errors->has('name'))
                        <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                      </div>

                      <button type="submit" class="btn btn-success">Update</button>
                    </form>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
