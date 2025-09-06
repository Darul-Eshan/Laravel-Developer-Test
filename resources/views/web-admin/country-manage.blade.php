@extends('master')
@section('loader')

@endsection
@section('content')
    <div class="dashboard__area">
        <div class="container mt-5" style="margin-left: 321px; max-width: 900px;">
            <h2 class="mb-4">Manage Countries</h2>

            <!-- Countries Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th style="width:50px;">#</th>
                        <th>Country Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>

                        <th style="width:200px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($countries as $country )
                    <tr>
                        <td>{{$country->id}}</td>
                        <td>{{$country->name}}</td>
                        <td>{{$country->description}}</td>
                        <td>

                            <img src="{{asset($country->image)}}" alt="{{ $country->name }}" style="width:300px; height:300px; border-radius:10px; object-fit:cover;">
                        </td>
                        <td>
                            {{$country->status==1?'active':"Inactive"}}
                        </td>
{{--                            <img src="{{$country->image}}" alt="{{ $country->name }}" style="width:150px; height:150px; border-radius:10px;">--}}
{{--                        </td>--}}

                        <td>

                            <a href="{{route('country.edit',['id'=>$country->id])}}" class="btn btn-sm btn-warning me-1">Edit</a>
                            <form action="{{route('country.delete',['id'=>$country->id])}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$country->id}}">
                            <button href="" class="btn btn-sm btn-danger me-1">Delete</button>
                            </form>
                            @if($country->status==1)
                                <a href="{{route('country.status',['id'=>$country->id])}}" class="btn btn-success btn-sm">Inactive</a>
                            @else
                                <a href="{{route('country.status',['id'=>$country->id])}}" class="btn btn-success btn-sm">Active</a>
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

