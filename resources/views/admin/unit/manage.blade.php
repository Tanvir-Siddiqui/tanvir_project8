@extends('admin.master')

@section('title')
    Manage Unit Page
@endsection

@section('body')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Unit Information</h4>
                        <h4 class="text-center text-info">{{session('message')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive theme-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Unit Name</th>
                                    <th>Unit Code</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($units as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->code}}</td>
                                    <td>{{$unit->description}}</td>
                                    <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <ul class="action">
                                            <li><a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a></li>&nbsp;
                                            <li><a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure Want To Delete This !!..')"><i class="fa fa-trash"></i></a></li>
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
