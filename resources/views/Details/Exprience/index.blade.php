@extends('layouts.app')

@section('main-content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{url('Details/Exprience/create')}}"> Add Exprience</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>company</th>
                        <th>designation</th>
                        <th>form</th>
                        <th>to</th>
                        <th>description</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->id}}</td>
                         <td>{{$d->company}}</td>
                         <td>{{$d->designation}}</td>
                         <td>{{$d->form}}</td>
                         <td>{{$d->to}}</td>
                         <td>{{$d->description}}</td>
                        <td>
                            <a href="{{ route('Details.Exprience.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a>
                            <a href="{{ route('Details.Exprience.delete',$d->id)}}" class="btm btn-sm btn-danger delete">delete</a>
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
