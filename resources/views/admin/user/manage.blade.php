@extends('admin.master')

@section('title')
    Manage User Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All User Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
{{--                                        <td><img src="{{asset($user->image)}}" alt="" height="50" width="60"></td>--}}
{{--                                        <td>{{$user->user_type}}</td>--}}
{{--                                        <td>{{$user->user_type == 1 ? 'Super Admin' ?: $user->user_type == 2 ? 'Admin' ?: $user->user_type == 3 ? 'Executive' :'' }}</td>--}}
{{--                                        <td>{{$user->user_type == 2 ? 'Admin' :''}}</td>--}}
                                        <td>{{$user->user_type == 2 ? 'Admin' : 'Executive'}}</td>
                                        <td>
                                            <ul class="action">
                                                <li><a href="{{route('user.edit', ['id' => $user->id])}}" class="btn-sm btn-group-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a></li>&nbsp;
                                                <li><a href="{{route('user.delete', ['id' => $user->id])}}" class="btn-sm btn-group-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')" title="Delete"><i class="fa fa-trash"></i></a></li>
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
