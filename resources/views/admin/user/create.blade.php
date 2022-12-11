@extends('admin.layouts.include')
@section('content')

    <div class="col-md-8" style="margin-left: 150px;margin-top: 30px">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">User Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('user.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
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
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="country" class="form-control" id="" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="c_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputFile">File input</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                            </div>--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text">Upload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
