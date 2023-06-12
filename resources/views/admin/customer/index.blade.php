@extends('admin.master')

@section('title')
    Customer Manage Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Customer Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Customer Id</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$customer->id}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->mobile}}</td>
                                        <td>
                                            <ul class="action">
                                                <li><a href="{{route('customer.delete', ['id' => $customer->id])}}" class="btn-sm btn-group-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')" title="Delete"><i class="fa fa-trash"></i></a></li>
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

