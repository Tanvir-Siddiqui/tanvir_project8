@extends('admin.master')

@section('title')
    Manage Order Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Order Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Order Id</th>
                                    <th>Order Total</th>
                                    <th>Customer Info</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->order_total}}</td>
{{--                                            <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>--}}
                                            <td>{{$order->customer->name ?? 'None'}}</td>
                                            <td>{{$order->order_date}}</td>
                                            <td>{{$order->order_status}}</td>
                                            <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online Delivery'}}</td>
                                            <td>{{$order->payment_status}}</td>
                                            <td>
                                                <ul class="action">
                                                    <li><a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn-sm btn-group-sm btn-primary" style="background-color: darkblue;color: white" title="Order Detail"><i class="fa fa-book-open"></i></a></li>&nbsp;
                                                    <li><a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn-sm btn-group-sm" style="background-color: darkviolet;color: white" title="Order Invoice"><i class="fa fa-file-invoice"></i></a></li>&nbsp;
{{--                                                    <li><a href="{{route('admin.print-invoice', ['id' => $order->id])}}" class="btn-sm btn-group-sm btn-warning" title="Print Invoice"><i class="fa fa-print"></i></a></li>&nbsp;--}}
                                                    <li><a href="{{route('admin.print-invoice', ['id' => $order->id])}}" class="btn-sm btn-group-sm" style="background-color: darkorange;color: white" title="Print Invoice" target="_blank"><i class="fa fa-print"></i></a></li>&nbsp;
                                                    <li><a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn-sm btn-group-sm btn-success {{$order->order_status == 'Complete' ? 'disabled' : ''}}" title="Order Edit"><i class="fa fa-edit"></i></a></li>&nbsp;
                                                    <li><a href="{{route('admin.order-delete', ['id' => $order->id])}}" class="btn-sm btn-group-sm btn-danger {{$order->order_status == 'Complete' || $order->order_status == 'Pending' || $order->order_status == 'Processing' ? 'disabled' : ''}}" onclick="return confirm('Are You Sure Want To Delete This !!..')" title="Order Delete"><i class="fa fa-trash"></i></a></li>
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

