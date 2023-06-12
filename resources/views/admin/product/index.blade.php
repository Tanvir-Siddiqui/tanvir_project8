@extends('admin.master')

@section('title')
    Add Product Page
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
                                <h4>Add Product Form</h4>
                                <h4 class="text-center text-success">{{session('message')}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Category Name</label>
                                        <div class="col-sm-9">
                                            <select name="category_id" class="form-select">
                                                <option value="">-- Select Category --</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Sub Category Name</label>
                                        <div class="col-sm-9">
                                            <select name="sub_category_id" class="form-select">
                                                <option value="">-- Select Sub Category --</option>
                                                @foreach($sub_categories as $sub_category)
                                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Brand Name</label>
                                        <div class="col-sm-9">
                                            <select name="brand_id" class="form-select">
                                                <option value="">-- Select Brand --</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Unit Name</label>
                                        <div class="col-sm-9">
                                            <select name="unit_id" class="form-select">
                                                <option value="">-- Select Unit --</option>
                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Product Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Product Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="code" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Stock Amount</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="stock_amount" type="number">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Product Price</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control" name="regular_price" type="number" placeholder="Regular Price"/>
                                                <input class="form-control" name="selling_price" type="number" placeholder="Selling Price"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Product Short Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputEmail3" rows="4" name="short_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Product Long Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="summernote" rows="4" name="long_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Product Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="inputPassword3" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Product Other Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="inputPassword3" type="file" multiple name="other_image[]">
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-secondary">Create New Product</button>
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


