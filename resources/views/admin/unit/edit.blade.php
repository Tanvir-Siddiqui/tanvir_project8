@extends('admin.master')

@section('title')
    Edit Unit Page
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
                                <h4>Edit Unit Form</h4>
                                <h4 class="text-success text-center">{{session('message')}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('unit.update', ['id' => $unit->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Unit Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text" value="{{$unit->name}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Unit Code</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="code" type="text" value="{{$unit->code}}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputEmail3">Unit Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="inputEmail3" rows="4" name="description">{{$unit->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-outline-primary">Update Unit Info</button>
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




