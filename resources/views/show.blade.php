@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Show Student') }}</div>

                    <div class="card-body">
                                    
                       <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>id </th>
                                <th>name</th>
                                <th>Email</th>
                                <th>mobile</th>
                                <th>age</th>
                                <th>marks</th>
                                <th>city</th>
                                <th>Images</th>
                                <th>Action</th>                             
                                
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $s)
                                    
                              
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->email }}</td>
                                <td>{{$s->mobile}}</td>
                                <td>{{$s->age}}</td>
                                <td>{{$s->marks}}</td>
                                <td>{{$s->city}}</td>
                                <td><img src="/uploads/{{$s->Images}}" width="50px" height="50px" alt="img"></td>
                                <td>
                                 <a href="/student/create" class="btn btn-success">Add </a>
                                 <a href="/student/create" class="btn btn-warning">Edit </a>
                                 <a href="/student/create" class="btn btn-danger">Delete </a>
                                 
                                </td>
                            </tr>                         
                           @endforeach
                            </tbody>
                        </table>  
                                       
                        <a href="/student" class="btn btn-danger">Back</a>              
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
