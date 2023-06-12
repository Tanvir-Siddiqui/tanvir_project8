@extends('admin.master')

@section('title')
    Edit Sub Category Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="text-center text-success">Edit Sub Category Form</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Category Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="category_id">
                                                <option value="">--  Select Category -- </option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{$sub_category->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Sub Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text" value="{{$sub_category->name}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Sub Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputEmail3" rows="4" name="description">{{$sub_category->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Sub Category Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="inputPassword3" type="file" name="image">
                                            <img src="{{asset($sub_category->image)}}" alt="" height="100" width="130">
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-warning">Update Sub Category</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--

@endsection




