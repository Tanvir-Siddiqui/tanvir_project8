@extends('admin.master')

@section('title')
    Edit Order Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Edit Order Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form" action="{{route('admin.order-update', ['id' => $order->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputEmail3">Order No</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" type="number" value="{{$order->id}}" readonly/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="">Order Status</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="order_status">
                                        <option value="Pending" {{$order->order_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        <option value="Processing" {{$order->order_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                        <option value="Complete" {{$order->order_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                        <option value="Cancel" {{$order->order_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputEmail3">Delivery Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="inputEmail3" rows="4" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Order Total</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="inputPassword3" type="number" name="order_total" value="{{$order->order_total}}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="">Payment Amount</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="" type="number" name="payment_amount" value="{{$order->order_total}}">
                                </div>
                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn" style="background-color: rgba(85,10,114,0.95);color: white">Update Order Status</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection


