@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="dashboard__area">
        <div class="container mt-5" style="margin-left: 321px; max-width: 500px;">
            <h2 class="mb-4">Add Country Details</h2>

            <!-- Country Add Form -->
            <form action="{{route('country.update',$country->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('massage'))
                    <div class="alert alert-success">
                        {{ session('massage') }}
                    </div>
                @endif

                <!-- Country Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Country Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$country->name}}" placeholder="Enter country name" required>
                </div>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="" required>{{$country->description}}</textarea>
                </div>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Image Upload -->
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <img
                        id="preview" src="{{ asset($country->image) }}" alt="Preview" class="img-fluid rounded"
                        style="width: 100%; height: 100%; object-fit: cover; border: 1px solid #ddd;"
                    >
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>

                <!-- Buttons -->
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
            </form>
        </div>
    </div>





@endsection
@section('script')

@endsection
