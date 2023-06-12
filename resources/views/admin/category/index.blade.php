@extends('admin.master')

@section('title')
    Add Category Page
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
                                <h4 class="card-title text-center">Add Category Form</h4>
                                <h4 class="text-center text-success">{{session('message')}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('category.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputEmail3" rows="4" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Category Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="inputPassword3" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-secondary">Create New Category</button>
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


