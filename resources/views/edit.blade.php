@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Student') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form action="/student/{{ $student[0]->id  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    {{-- NAME --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $student[0]->name }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    {{-- EMAIL --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $student[0]->email }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- MOBILE --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" value="{{ $student[0]->mobile }}">
                        @error('mobile')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- AGE --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Age:</label>
                        <input type="text" class="form-control" name="age" value="{{ $student[0]->age }}">
                        @error('age')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- MARKS --}}
                    <div class="mb-3 mt-3">
                        <label class="form-label">Marks:</label>
                        <input type="text" class="form-control" name="marks" value="{{ $student[0]->marks }}">
                        @error('marks')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- CITY --}}
                    <div class="mb-3">
                        <label class="form-label">City:</label>
                        <input type="text" class="form-control" name="city" value="{{ $student[0]->city }}">
                        @error('city')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- IMAGE --}}
                    <img src="/uploads/{{$student[0]->Images}}" width="70px" height="70px" alt="img">

                    <div class="mb-3">
                        <label class="form-label">Upload Image:</label>
                        <input type="file" class="form-control" name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="hidden" class="form-control" name="id" value="{{ $student[0]->id }}">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="/home" class="btn btn-danger">Back</a>

                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
