@extends('admin.master')

@section('title')
    Manage Brand Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Brand Information</h4>
                        <h4 class="text-center text-primary">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Brand Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->description}}</td>
                                        <td><img src="{{asset($brand->image)}}" alt="" height="50" width="70"></td>
                                        <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <ul class="action">
                                                <li><a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn-sm btn-group-sm btn-outline-success"><i class="fa fa-edit"></i></a></li>&nbsp;
                                                <li><a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn-sm btn-group-sm btn-outline-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')"><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
