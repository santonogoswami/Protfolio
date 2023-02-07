@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{url('Details/About/create')}}"> Add</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>proffession</th>
                        <th>short_description</th>
                        <th>long_description</th>
                        <th>DOB</th>
                        <th>age </th>
                        <th>website</th>
                        <th>degree</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>city</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->id}}</td>
                         <td>{{$d->proffession}}</td>
                         <td>{{$d->short_description}}</td>
                         <td>{{$d->long_description}}</td>
                         <td>{{$d->DOB}}</td>
                         <td>{{$d->age}}</td>
                         <td>{{$d->website}}</td>
                         <td>{{$d->degree}}</td>
                         <td>{{$d->phone}}</td>
                         <td>{{$d->email}}</td>
                         <td>{{$d->city}}</td>
                        <td>
                            <a href="{{ route('Details.About.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a>
                            <a href="{{ route('Details.About.delete',$d->id)}}" class="btm btn-sm btn-danger delete">delete</a>
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
