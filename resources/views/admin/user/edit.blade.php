@extends('admin.master')

@section('title')
    User Edit Page
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
                                <h4 class="card-title">User Edit Form</h4>
                                <h4 class="text-center text-success">{{session('message')}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('user.update', ['id' => $user->id])}}" method="post">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">User Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">User Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="email" type="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">User Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="password" type="password" value="{{$user->password}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">User Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" name="user_type">
                                                <option> -- Select User Type --</option>
{{--                                                <option value="1" {{$user->user_type == 1 ? 'selected' : ''}}>Super Admin</option>--}}
                                                <option value="1" {{$user->user_type == 1 ? 'selected' : ''}}>Executive</option>
                                                <option value="2" {{$user->user_type == 2 ? 'selected' : ''}}>Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-secondary">Update User</button>
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




