@extends('admin.layouts.include')
@section('content')

<section class="content">
    <div class="row" style="justify-content: center">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Profile Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('profile.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" @if($user->role!=1) readonly @endif value="{{$user->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="country" value="{{$user->country}}" class="form-control" id="" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" accept="image/png, image/gif, image/jpeg"  class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{asset($user->img)}}" style="width: 80px; height:80px; margin-top: 20px;">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>
<!-- /.content -->
</div>
@endsection
