@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Add New State</h4>

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form action="{{ route('city.update', [$city->id]) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="country_id" class="form-label">Select Country <span class="text-danger">*</span></label>
                            <select name="country_id" id="country_id" class="form-control" required>
                                <option value="">-- Select Country --</option>


                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" {{ $city->country_id == $country->id ? 'selected' : '' }}>
                                        {{$country->name}}
                                    </option>
                                @endforeach


                            </select>
                            @error('country_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="state_id" class="form-label">Select State <span class="text-danger">*</span></label>
                            <select name="state_id" id="state_id" class="form-control" required>
                                <option value="">-- Select State--</option>


                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach


                            </select>
                            @error('country_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">City Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{$city->name}}" class="form-control" required>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{$city->description}}</textarea>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">city update</button>
                            <a href="" class="btn btn-secondary">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
@section('script')

@endsection

