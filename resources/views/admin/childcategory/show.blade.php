@extends('admin.layouts.include')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h1 class="card-title">Add  Child-Category</h1>

                </div>
                <form action="{{route('child-category.update',['id'=>$childcategory->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select disabled name="category_id"  id="category" class="form-control category" required>
                                        <option value="">Chose Category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" {{ ( $cat->id == $childcategory->category_id) ? 'selected' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sub Category</label>
                                    <select disabled name="subcategory_id"  class="form-control maincategory" required>
                                        <option value="">Chose SubCategory</option>
                                        @foreach($subcategories as $cat)
                                            <option value="{{$cat->id}}" {{ ( $cat->id == $childcategory->subcategory_id) ? 'selected' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title </label>
                                    <input readonly type="text" value="{{$childcategory->name}}" name="name1" placeholder="Enter Title 1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">File</label><br>
                                    @if(file_exists($childcategory->file))
                                    <a href="{{asset($childcategory->file)}}" target="_blank"> <span class="badge badge-success">{{$childcategory->name}}</span></a>
                                    @elseif($childcategory->file)
                                        <a href="#" target="_blank"> <span class="badge badge-success">{{$childcategory->file}}</span></a>
                                    @else
                                        <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>
                                    @endif
                                </div>
                            </div>
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Title 2</label>--}}
{{--                                    <input type="text" readonly value="{{$childcategory->name2}}" name="name2" placeholder="Enter Title 2"  class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">File 2</label>--}}
{{--                                    @if(file_exists($childcategory->file2))--}}
{{--                                        <a href="{{asset($childcategory->file2)}}" target="_blank"> <span class="badge badge-success">{{$childcategory->name2}}</span></a>--}}
{{--                                    @elseif($childcategory->file2)--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">{{$childcategory->file2}}</span></a>--}}
{{--                                    @else--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Title 3</label>--}}
{{--                                    <input type="text" readonly name="name3" value="{{$childcategory->name3}}" placeholder="Enter Title 3"  class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">File 3</label>--}}
{{--                                    @if(file_exists($childcategory->file3))--}}
{{--                                        <a href="{{asset($childcategory->file3)}}" target="_blank"> <span class="badge badge-success">{{$childcategory->name3}}</span></a>--}}
{{--                                    @elseif($childcategory->file3)--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">{{$childcategory->file3}}</span></a>--}}
{{--                                    @else--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Title 4</label>--}}
{{--                                    <input type="text" readonly name="name4" value="{{$childcategory->name4}}" placeholder="Enter Title 4"  class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">File 4</label>--}}
{{--                                    @if(file_exists($childcategory->file4))--}}
{{--                                        <a href="{{asset($childcategory->file4)}}" target="_blank"> <span class="badge badge-success">{{$childcategory->name4}}</span></a>--}}
{{--                                    @elseif($childcategory->file4)--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">{{$childcategory->file4}}</span></a>--}}
{{--                                    @else--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">Title 5</label>--}}
{{--                                    <input type="text" readonly name="name5" value="{{$childcategory->name5}}" placeholder="Enter Title 5"  class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="">File 5</label>--}}
{{--                                    @if(file_exists($childcategory->file5))--}}
{{--                                        <a href="{{asset($childcategory->file5)}}" target="_blank"> <span class="badge badge-success">{{$childcategory->name5}}</span></a>--}}
{{--                                    @elseif($childcategory->file5)--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">{{$childcategory->file5}}</span></a>--}}
{{--                                    @else--}}
{{--                                        <a href="#" target="_blank"> <span class="badge badge-success">Empty</span></a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        </div>
                </form>
                <!-- /.card -->

                <!-- /.container-fluid -->
    </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('#category').on('change', function () {
            $('.maincategory').html('<option value="">Select One SubCategory</option>');

            $.ajax({
                type: 'POST',
                url: '{{route('fetchmaincategory')}}',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: this.value,
                },
                success: function (response) {
                    console.log(response);
                    $.each(response, function(i, item) {
                        $('.maincategory').append('<option value="'+item.id+'">'+item.name+'</option>');
                    });

                }
            });
        });
        $('#method').on('change', function () {
            if(this.value==1){
                $("#sub").hide();
            }else{
                $("#sub").show();
            }

        });
    </script>
@endsection

