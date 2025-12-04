@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/student/create" class="btn btn-success">Add Student</a>
                    <a href="/student/1" class="btn btn-dark">show </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
