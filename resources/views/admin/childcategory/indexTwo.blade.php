@extends('admin.layouts.include')
@section('content')
    <!-- Main content -->
    <?php $user = Auth::user();?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Child Category</h3>
                            <a href="{{route('child-categoryy.create.two')}}" style="margin-left: 30px;" class="btn btn-primary btn-sm float-right">Add New
                            </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>File</th>
                                    <th>Created User</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($childcategory as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->category->name}}</td>
                                        <td>{{$row->subcategories->name}}</td>
                                        <td>
                                            @if(file_exists($row->file))
                                                <a href="{{asset($row->file)}}" target="_blank"> <span class="badge badge-success">{{$row->name}}</span></a>
                                            @elseif($row->file)
                                                <a href="{{$row->file}}" target="_blank"> <span class="badge badge-success">{{$row->file}}</span></a>
                                            @else
                                                <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>
                                            @endif
                                        </td>
                                        <td>{{$row->user->name}}</td>
                                        <td><a href="{{route('child-category.edit' , ['id'=>$row->id,'status'=>2])}}"  class="btn btn-sm btn-primary" title="edit">
                                                <i class="fa fa-pen"></i> Edit
                                            </a>
                                            <a href="{{route('child-category.delete' ,$row->id)}}" id="delete"
                                               class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-times"></i> Delete
                                            </a>

                                            <a href="{{route('child-category.details' ,$row->id)}}" id="delete"
                                               class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-eye"></i> Details
                                            </a>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
