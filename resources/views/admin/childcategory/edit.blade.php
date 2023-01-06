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
                                    <select  name="category_id"  id="category" class="form-control category" required>
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
                                    <select  name="subcategory_id"  class="form-control maincategory" required>
                                        <option value="">Chose SubCategory</option>
                                        @foreach($subcategories as $cat)
                                            <option value="{{$cat->id}}" {{ ( $cat->id == $childcategory->subcategory_id) ? 'selected' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 1</label>
                                    <input type="text" value="{{$childcategory->name1}}" name="name1" placeholder="Enter Title 1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">File 1</label>
                                    @if(file_exists($childcategory->file1))
                                    <input type="file" name="file1" id="file1"   class="form-control">
                                    <input type="text" name="file1" id="link1" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                    @else
                                    <input type="file" name="file1" id="file1" style="display: none"  class="form-control">
                                    <input type="text" name="file1" id="link1" value="{{$childcategory->file1 }}" placeholder="Enter PDF File Link"   class="form-control">
                                    @endif
                                    <input type="file" name="file1" accept=".pdf"   class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 2</label>
                                    <input type="text" value="{{$childcategory->name2}}" name="name2" placeholder="Enter Title 2"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox2" @if(file_exists($childcategory->file2))checked="" @endif  type="checkbox" >
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 2</label>
                                    @if(file_exists($childcategory->file2))
                                    <input type="file" name="file2" id="file2"   class="form-control">
                                    <input type="text" name="file2" id="link2" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                    @else
                                        <input type="file" name="file2" id="file2" style="display: none"   class="form-control">
                                        <input type="text" name="file2" id="link2" value="{{$childcategory->file2 }}" placeholder="Enter PDF File Link"    class="form-control">
                                    @endif
                                    <input type="file" name="file2" accept=".pdf"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 3</label>
                                    <input type="text" value="{{$childcategory->name3}}" name="name3" placeholder="Enter Title 3"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox3" @if(file_exists($childcategory->file3))checked="" @endif  type="checkbox">
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 3</label>
                                    @if(file_exists($childcategory->file3))
                                    <input type="file" name="file3" id="file3"   class="form-control">
                                    <input type="text" name="file3" id="link3" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                    @else
                                        <input type="file" name="file3" id="file3" style="display: none"   class="form-control">
                                        <input type="text" name="file3" id="link3" value="{{$childcategory->file3 }}" placeholder="Enter PDF File Link"   class="form-control">
                                    @endif
                                    <input type="file" name="file3" accept=".pdf"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 4</label>
                                    <input type="text" name="name4" value="{{$childcategory->name4}}" placeholder="Enter Title 4"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox4" type="checkbox" @if(file_exists($childcategory->file4))checked="" @endif>
                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 4</label>
                                    @if(file_exists($childcategory->file4))
                                    <input type="file" name="file4" id="file4"   class="form-control">
                                    <input type="text" name="file4"  id="link4" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                    @else
                                        <input type="file" name="file4" style="display: none" id="file4"   class="form-control">
                                        <input type="text" name="file4"  id="link4" value="{{$childcategory->file4}}" placeholder="Enter PDF File Link"    class="form-control">
                                    @endif
                                    <input type="file" name="file4"  accept=".pdf" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Title 5</label>
                                    <input type="text" name="name5" value="{{$childcategory->name5}}" placeholder="Enter Title 5"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for=""></label>
                                    <div class="form-check" style="margin-top: 16px;">
                                        <input class="form-check-input" id="checkbox5" type="checkbox" @if(file_exists($childcategory->file5))checked="" @endif>

                                        <label class="form-check-label"><b>Do you Want link?</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">File 5</label>
                                    @if(file_exists($childcategory->file5))
                                    <input type="file" name="file5" id="file5"   class="form-control">
                                    <input type="text" name="file5" id="link5" placeholder="Enter PDF File Link"  style="display: none"  class="form-control">
                                    @else
                                        <input type="file" name="file5" id="file5" style="display: none"  class="form-control">
                                        <input type="text" name="file5" id="link5" value="{{$childcategory->file5}}" placeholder="Enter PDF File Link"    class="form-control">
                                    @endif
                                    <input type="file" name="file5" accept=".pdf"  class="form-control">
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

