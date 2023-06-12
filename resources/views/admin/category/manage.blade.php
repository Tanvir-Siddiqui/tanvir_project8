@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')
{{--    <div class="container-fluid">--}}
{{--        <div class="page-title">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h3>Basic Table</h3>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>--}}
{{--                        <li class="breadcrumb-item">Data Table</li>--}}
{{--                        <li class="breadcrumb-item active">Basic Table</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Category Information</h4>
                        <h4 class="text-center text-info">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td><img src="{{asset($category->image)}}" alt="" height="50" width="70"></td>
                                    <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <ul class="action">
{{--                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>--}}
{{--                                            <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>--}}
                                            <li><a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a></li>&nbsp;
                                            <li><a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')"><i class="fa fa-trash"></i></a></li>
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
