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
                    
                    {{-- NAME --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    {{-- EMAIL --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- MOBILE --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
                        @error('mobile')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- AGE --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Age:</label>
                        <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        @error('age')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- MARKS --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Marks:</label>
                        <input type="text" class="form-control" name="marks" value="{{ old('marks') }}">
                        @error('marks')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- CITY --}}
                    <div class="mb-3">
                        <label class="form-label">City:</label>
                        <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                        @error('city')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- IMAGE --}}
                    <div class="mb-3">
                        <label class="form-label">Upload Image:</label>
                        <input type="file" class="form-control" name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
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
