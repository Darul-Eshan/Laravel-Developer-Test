@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="dashboard__area">
        <div class="container mt-5" style="margin-left: 321px; max-width: 900px;">
            <h2 class="mb-4">Manage City</h2>


            <!-- Countries Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th style="width:50px;">#</th>
                        <th>Name</th>
                        <th>Email</th>



                        <th style="width:200px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>


                            <td>

                                <a href="{{route('user.edit',[$user->id])}}" class="btn btn-sm btn-warning me-1">Edit</a>



                                <form action="{{route('user.delete',[$user->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" class="id" value="{{$user->id}}">
                                    <button href="" class="btn btn-sm btn-danger me-1">Delete</button>
                                </form>





                            </td>
                        </tr>

                    @endforeach
                    -->
                    </tbody>
                </table>
            </div>

            <!-- Pagination (Optional) -->
            <div class="d-flex justify-content-end mt-3">
                <nav>
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>






@endsection
@section('script')

@endsection


