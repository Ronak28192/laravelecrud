@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Student') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="/student" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                   
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                     @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="Mobile" class="form-label">Mobile:</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="Age" class="form-label">Age:</label>
                        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="Age" class="form-label">Marks:</label>
                        <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Upload Image:</label>
                        <input type="file" class="form-control" id="img" placeholder="Enter img" name="img">
                    </div>

                    <div class="form-check mb-3">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/home" class="btn btn-danger">Back</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
