@extends('admin.master')

@section('title')
    Add User Page
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
                                <h4 class="card-title">Add User Form</h4>
                                <h4 class="text-center text-success">{{session('message')}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('user.new-user')}}" method="post">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">User Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="email" type="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">User Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="password" type="password">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">User Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="user_type">
                                                <option> -- Select User Type --</option>
{{--                                                <option value="1">Super Admin</option>--}}
                                                <option value="1">Executive</option>
                                                <option value="2">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-secondary">Create New User</button>
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



