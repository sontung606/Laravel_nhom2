@extends('admin.master')
@section('header')
    Edit <b>{{$product_type->name}}</b>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">product_type</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit <b>{{$product_type->name}}</b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="editFrm" role="form" method="post" enctype="multipart/form-data" action="/edit-product-type/{{$product_type->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label >Product type ID</label>
                            <input type="text" class="form-control" id="product-type-id" name="id" placeholder="Enter product id" value="{{$product_type->id}}">
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" id="product-type-id" name="name" placeholder="Enter product id" value="{{$product_type->name}}">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" id="product-desc" name="desc" rows="3" placeholder="Enter product type description">
                                 {{$product_type->description}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product type image</label>
                            <div class="input-group">
                                <img id="blah" src="{{asset('source/image/product/' . $product_type->image)}}" alt="your image" style="width: 300px; height: 300px;"/>
                            </div><br>
                            <div class="input-group">
                                <input type="file" name="img" required="true" onchange="readURL(this);">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a id="submitBtn" class="btn btn-success">Update</a>
                        <a class="btn btn-warning" onclick="reset()">Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $("#submitBtn").click(function(){
                if (confirm("Click OK to continue?")){
                    $('form#editFrm').submit();
                }
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };
                reader.readAsDataURL(input.files[0]);
                $('#blah').show();
            }
        }
        function reset(){
            document.getElementById('editFrm').reset();
            $('#blah').attr('src','{{asset('source/image/product/' . $product_type->image)}}');
        }
    </script>
@endsection
