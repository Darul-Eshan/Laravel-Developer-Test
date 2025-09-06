@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="dashboard__area">
        <div class="container mt-5" style="margin-left: 321px; max-width: 500px;">
            <h2 class="mb-4">Add Country Details</h2>

            <!-- Success/Error Message Div -->
            <div id="responseMessage"></div>

            <!-- Country Add Form -->
            <form id="countryForm" enctype="multipart/form-data">
                @csrf

                <!-- Country Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Country Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter country name" required>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter description" required></textarea>
                </div>

                <!-- Image Upload -->
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
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
    <script>
        $("#countryForm").on('submit', function(e){
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('country.save') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){
                    $("#responseMessage").html(
                        `<div class="alert alert-success">${response.message}</div>`
                    );
                    $("#countryForm")[0].reset(); // form clear
                },
                error: function(xhr){
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value){
                        errorHtml += `<li>${value}</li>`;
                    });
                    errorHtml += '</ul></div>';
                    $("#responseMessage").html(errorHtml);
                }
            });
        });
    </script>
@endsection
