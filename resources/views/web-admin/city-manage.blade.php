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
                        <th>Country</th>
                        <th>State</th>
                        <th>City Name</th>
                        <th>Description</th>
                        <th>Status</th>

                        <th style="width:200px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)

                    <tr>
                        <td>{{$city->id}}</td>
                        <td>{{$city->countries->name}}</td>
                        <td>{{$city->states->name}}</td>
                        <td>{{$city->name}}</td>
                        <td>{{$city->description}}</td>
                        <td>
                            {{$city->status==1?'active':"inactive"}}
                        </td>
                        <td>

                            <a href="{{route('city.edit',[$city->id])}}" class="btn btn-sm btn-warning me-1">Edit</a>



                            <form action="{{route('city.delete',[$city->id])}}" method="post">
                                @csrf
                                <input type="hidden" class="id" value="{{$city->id}}">
                                <button href="" class="btn btn-sm btn-danger me-1">Delete</button>
                            </form>
                            @if($city->status==1)
                                <a href="{{route('city.status',[$city->id])}}" class="btn btn-success btn-sm">Inactive</a>
                            @else
                                <a href="{{route('city.status',[$city->id])}}" class="btn btn-success btn-sm">Active</a>
                            @endif




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


