@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{url('Details/webSetting/create')}}"> Add</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>location </th>
                        <th>email </th>
                        <th>call</th>
                        <th>google_map</th>
                        <th>photo</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->location}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->call}}</td>
                        <td>{{$d->google_map}}</td>
                        <td><img src="{{asset($d->photo)}}" alt="" width="100px" height="100px"></td>
                        <td>{{$d->name}}</td>
                        <td>
                            <a href="{{ route('Details.webSetting.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a>
                            <a href="{{ route('Details.webSetting.delete',$d->id)}}" class="btm btn-sm btn-danger delete">delete</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
