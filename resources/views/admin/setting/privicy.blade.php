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
                            <h3 class="card-title">Privacy and Policy </h3>
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
                                @foreach($privacy as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <img style="width:60px; border-radius:60px; " src="{{asset($row->img)}}"
                                                 alt="">
                                        </td>
                                        <td>{{$row->user->name}}</td>
                                        <td><a href="" data-toggle="modal"
                                               data-target="#exampleModal{{$row->id}}" class="btn btn-sm btn-primary"
                                               data-toggle="tooltip" title="edit">
                                                <i class="fa fa-pen"></i> Edit
                                            </a>
                                            <a href="{{route('privacy.show' ,$row->id)}}" id="delete"
                                               class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-times"></i> Delete
                                            </a>
                                            <a href="" data-toggle="modal"
                                               data-target="#about{{$row->id}}" class="btn btn-sm btn-success"
                                               data-toggle="tooltip" title="edit">
                                                <i class="fa fa-pen"></i> Details
                                            </a>

                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Donate</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{route('privacy.update',$row->id)}}" method="post"
                                                          enctype="multipart/form-data" data-parsley-validate>
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Name</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" value="{{$row->name}}" name="name"
                                                                       required placeholder=" Name"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Link</b><span class="text-danger">*</span></label>
                                                                <input type="text" name="link" value="{{$row->link}}" required placeholder="Enter Please Link"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Description</b><span class="text-danger">*</span></label>
                                                                <textarea name="description" class="form-control" id="" cols="20" rows="5">{{$row->description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Image</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="file" accept="image/png, image/gif, image/jpeg"  name="img" class="form-control">
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
                                    <div class="modal fade" id="about{{$row->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Details privacy & Policy</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{route('privacy.update',$row->id)}}" method="post"
                                                          enctype="multipart/form-data" data-parsley-validate>
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Name</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input readonly type="text" value="{{$row->name}}" name="name"
                                                                       required placeholder="Category Name"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Link</b><span class="text-danger">*</span></label>
                                                                <input type="text" name="link" value="{{$row->link}}"  required placeholder="Enter Please Link"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Description</b><span class="text-danger">*</span></label>
                                                                <textarea readonly name="description" class="form-control" id="" cols="20" rows="5">{{$row->description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <img style="width:160px;" src="{{asset($row->img)}}"
                                                                     alt="">
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Donate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{route('privacy.store')}}" method="post" enctype="multipart/form-data"
                          data-parsley-validate>
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Name</b><span class="text-danger">*</span></label>
                                <input type="text" name="name" required placeholder=" Enter Please Name"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Link</b><span class="text-danger">*</span></label>
                                <input type="text" name="link" required placeholder="Enter Please Link"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Image</b><span class="text-danger">*</span></label>
                                <input type="file" accept="image/png, image/gif, image/jpeg"  name="img" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Description</b><span class="text-danger">*</span></label>
                                <textarea name="description" class="form-control" id="" placeholder="Please Enter Description" cols="20" rows="5"></textarea>
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
