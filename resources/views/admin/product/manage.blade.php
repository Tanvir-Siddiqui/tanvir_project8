@extends('admin.master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Product Information</h4>
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar table-bordered">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Selling Price</th>
                                    <th>Stock Amount</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td>{{$product->stock_amount}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="60"></td>
                                    <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <ul class="action">
                                            <li><a href="{{route('product.detail', ['id' => $product->id])}}" class="btn-sm btn-group-sm btn-info" title="Detail"><i class="fa fa-book-open"></i></a></li>&nbsp;
                                            <li><a href="{{route('product.edit', ['id' => $product->id])}}" class="btn-sm btn-group-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a></li>&nbsp;
                                            <li><a href="{{route('product.delete', ['id' => $product->id])}}" class="btn-sm btn-group-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')" title="Delete"><i class="fa fa-trash"></i></a></li>
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
