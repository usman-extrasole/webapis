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
                            <h3 class="card-title">Category</h3>
                            <button style="margin-left: 30px;" class="btn btn-primary btn-sm float-right"
                                    data-toggle="modal" data-target="#exampleModal">Add New
                            </button>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created User</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <img style="width:60px; border-radius:20px; " src="{{asset($row->img)}}"
                                                 alt="">
                                        </td>
                                        <td>{{$row->user->name}}</td>
                                        <td><a href="{{route('category.edit' , $row->id)}}" data-toggle="modal"
                                               data-target="#exampleModal{{$row->id}}" class="btn btn-sm btn-primary"
                                               data-toggle="tooltip" title="edit">
                                                <i class="fa fa-pen"></i> Edit
                                            </a>
                                            <a href="{{route('category.destroy' ,$row->id)}}" id="delete"
                                               class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-times"></i> Delete
                                            </a>
{{--                                            @if($user->role==1 && $row->status==1)--}}
{{--                                            <a href="{{route('category.edit' ,$row->id)}}" id="delete"--}}
{{--                                               class="btn btn-sm btn-warning" data-toggle="tooltip" title="edit">--}}
{{--                                                <i class="fa fa-user"></i> Approve--}}
{{--                                            </a>--}}
{{--                                            @endif--}}
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{route('category.update',$row->id)}}" method="post"
                                                          enctype="multipart/form-data" data-parsley-validate>
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Category Title 1</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" value="{{$row->name}}" name="name"
                                                                       required placeholder="Category Title 1"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Category Title 2</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" value="{{$row->name2}}" name="name2"
                                                                        placeholder="Category Title 2"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Image</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="file" accept="image/png, image/gif, image/jpeg" name="img" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <img style="width:160px;" src="{{asset($row->img)}}"
                                                                     alt="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 pull-right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-block">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data"
                          data-parsley-validate>
                        @csrf
                         <input type="hidden" name="status" value="0">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Category Title 1</b><span class="text-danger">*</span></label>
                                <input type="text" name="name" required placeholder="Category Title 1"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Category Title 2</b><span class="text-danger">*</span></label>
                                <input type="text" name="name2"  placeholder="Category Title 2"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Image</b><span class="text-danger">*</span></label>
                                <input type="file" name="img" accept="image/png, image/gif, image/jpeg" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div></div>

@endsection
