@extends('admin.master')

@section('title')
    Manage Sub Category Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Sub Category Information</h4>
                        <h4 class="text-center text-info">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sub_categories as $sub_category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$sub_category->category->name}}</td>
                                    <td>{{$sub_category->name}}</td>
                                    <td>{{$sub_category->description}}</td>
                                    <td><img src="{{asset($sub_category->image)}}" alt="" height="50" width="60"></td>
                                    <td>{{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <ul class="action">
                                            <li><a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a></li>&nbsp;
                                            <li><a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a></li>
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
