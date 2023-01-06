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
                <form action="{{route('child-category.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                    <input type="hidden" name="status" value="1">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select  name="category_id"  id="category" class="form-control category" required>
                                        <option value="">Chose Category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sub Category</label>
                                    <select  name="subcategory_id"  class="form-control maincategory" required>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 1</label>
                                    <input type="text" name="name1" placeholder="Enter Title 1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox1" type="checkbox" checked="">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 1</label>
                                    <input type="file" name="file1" id="file1"   class="form-control">
                                    <input type="text" name="file1" id="link1" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 2</label>
                                    <input type="text" name="name2" placeholder="Enter Title 2"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox2" type="checkbox" checked="">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 2</label>
                                    <input type="file" name="file2" id="file2"   class="form-control">
                                    <input type="text" name="file2" id="link2" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 3</label>
                                    <input type="text" name="name3" placeholder="Enter Title 3"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox3" type="checkbox" checked="">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 3</label>
                                    <input type="file" name="file3" id="file3"   class="form-control">
                                    <input type="text" name="file3" id="link3" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 4</label>
                                    <input type="text" name="name4" placeholder="Enter Title 4"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox4" type="checkbox" checked="">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 4</label>
                                    <input type="file" name="file4" id="file4"   class="form-control">
                                    <input type="text" name="file4" id="link4" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 5</label>
                                    <input type="text" name="name5" placeholder="Enter Title 5"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox5" type="checkbox" checked="">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 5</label>
                                    <input type="file" name="file5" id="file5"   class="form-control">
                                    <input type="text" name="file5" id="link5" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="width: 200px;">Save</button>
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
                    status:1
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
    <script>
        $(document).ready(function(){
            $('#checkbox1').click(function(){
                if($(this).prop("checked") == true){
                    $("#file1").show();
                    $("#link1").hide();
                }
                else if($(this).prop("checked") == false){
                    $("#file1").hide();
                    $("#link1").show();
                }
            });
            $('#checkbox2').click(function(){
                if($(this).prop("checked") == true){
                    $("#file2").show();
                    $("#link2").hide();
                }
                else if($(this).prop("checked") == false){
                    $("#file2").hide();
                    $("#link2").show();
                }
            });
            $('#checkbox3').click(function(){
                if($(this).prop("checked") == true){
                    $("#file3").show();
                    $("#link3").hide();
                }
                else if($(this).prop("checked") == false){
                    $("#file3").hide();
                    $("#link3").show();
                }
            });
            $('#checkbox4').click(function(){
                if($(this).prop("checked") == true){
                    $("#file4").show();
                    $("#link4").hide();
                }
                else if($(this).prop("checked") == false){
                    $("#file4").hide();
                    $("#link4").show();
                }
            });
            $('#checkbox5').click(function(){
                if($(this).prop("checked") == true){
                    $("#file5").show();
                    $("#link5").hide();
                }
                else if($(this).prop("checked") == false){
                    $("#file5").hide();
                    $("#link5").show();
                }
            });
        });
    </script>
@endsection

