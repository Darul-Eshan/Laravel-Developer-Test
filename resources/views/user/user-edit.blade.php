@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="dashboard__area">
        <div class="container mt-5" style="margin-left: 321px; max-width: 500px;">
            <h2 class="mb-4">Add Country Details</h2>

            <!-- Country Add Form -->
            <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('massage'))
                    <div class="alert alert-success">
                        {{ session('massage') }}
                    </div>
                @endif

                <!-- Country Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Enter  name" required>
                </div>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Enter email" required>
                </div>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror



                <!-- Buttons -->
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </form>
        </div>
    </div>





@endsection
@section('script')

@endsection
