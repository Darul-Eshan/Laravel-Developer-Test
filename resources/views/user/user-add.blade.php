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
                        <h4>User Add</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('user.save')}}" method="POST">


                            <div class="mb-3">
                                @csrf
                                <label for="lastName" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg" name="name" id="lastName" placeholder="Last Name...">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Type Email</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Type Email...">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Type Password</label>
                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Type Password...">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="" class="btn btn-secondary">Cancel</a>
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

