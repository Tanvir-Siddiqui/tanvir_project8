@extends('admin.master')

@section('title')
     Order Detail Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Order Basic Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <tr>
                                  <th><h6>Order No</h6></th>
                                  <td>{{$order->id}}</td>
                              </tr>
                                <tr>
                                    <th><h6>Order Date</h6></th>
                                    <td>{{$order->order_date}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Order Total</h6></th>
                                    <td>{{$order->order_total}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Tax Total</h6></th>
                                    <td>{{$order->tax_total}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Shipping Total</h6></th>
                                    <td>{{$order->shipping_total}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Order Status</h6></th>
                                    <td>{{$order->order_status}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Payment Type</h6></th>
                                    <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online Delivery'}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Payment Status</h6></th>
                                    <td>{{$order->payment_status}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Delivery Address</h6></th>
                                    <td>{{$order->delivery_address}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Delivery Status</h6></th>
                                    <td>{{$order->delivery_status}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Customer Name</h6></th>
                                    <td>{{$order->customer->name}}</td>
                                </tr>
                                <tr>
                                    <th><h6>Customer Mobile</h6></th>
                                    <td>{{$order->customer->mobile}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Order Product Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->orderDetails as $orderDetail)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$orderDetail->product_id}}</td>
                                        <td>{{$orderDetail->product_name}}</td>
                                        <td>{{$orderDetail->product_price}}</td>
                                        <td>{{$orderDetail->product_quantity}}</td>
                                        <td>{{$orderDetail->product_quantity * $orderDetail->product_price}}</td>
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


