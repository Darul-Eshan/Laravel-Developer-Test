@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Add New State</h4>


{{--                    action="{{route('state.save')}}" method="post"--}}
                    <form id="state_form">
                        @csrf

                        <div id="massage"></div>

                        <!-- Country, Name, Description fields -->


                        <div class="mb-3">
                            <label for="country_id" class="form-label">Select Country <span class="text-danger">*</span></label>
                            <select name="country_id" id="country_id" class="form-control" required>
                                <option value="">-- Select Country --</option>

                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">
                                        {{$country->name}}
                                    </option>
                                  @endforeach

                            </select>
                            @error('country_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">State Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add State</button>
                            <a href="" class="btn btn-secondary">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
@section('script')
    <script>
        $("#state_form").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('state.save') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    // success message
                    $("#massage").html(
                        `<div class="alert alert-success">${response.message}</div>`
                    );

                    // form reset
                    $("#state_form")[0].reset();
                },
                error: function(xhr){
                    // validation error
                    if(xhr.responseJSON && xhr.responseJSON.errors){
                        let errors = xhr.responseJSON.errors;
                        let errorHtml = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function(key, value){
                            errorHtml += `<li>${value}</li>`;
                        });
                        errorHtml += '</ul></div>';
                        $("#massage").html(errorHtml);
                    } else {
                        alert(xhr.responseText);
                    }
                }
            });
        });
    </script>

@endsection
