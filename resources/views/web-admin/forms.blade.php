@extends('master')
@section('loader')
{{--    <div class="preloader" id="preloader">--}}
@endsection
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Horizontal Input</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control form-control-lg" id="firstName" placeholder="First Name...">
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Last Name...">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Type Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Type Email...">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Type Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Type Password...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')

@endsection

