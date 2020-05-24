@extends('admin.master')
@section('header')
    Add Slide
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">S</li>
    <li class="breadcrumb-item active">Add</li>
@endsection
@section('main-content')
    <div class="row">   
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('add-slide')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Link">link</label>
                            <input type="text" class="form-control" id="slide-link" name="link" placeholder="Enter link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"> image</label>
                            <div class="input-group">
                                <img id="blah" src="#" alt="your image" style="display: none"/>
                            </div><br>
                            <div class="input-group">
                                <input type="file" name="img" required="true" onchange="readURL(this);">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
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
    </script>
@endsection
