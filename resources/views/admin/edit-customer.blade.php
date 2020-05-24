@extends('admin.master')
@section('header')
    Edit Customer
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Customer</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="editFrm" role="form" method="post" enctype="multipart/form-data" action="/edit-customer/{{$customer->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Customer name">Name</label>
                            <input type="text" class="form-control" id="customer-name" name="name" placeholder="Enter name"  value="{{$customer->name}}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" id="customer-gender" name="gender" placeholder="Enter gender"  value="{{$customer->gender}}" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="customer-email" name="email" placeholder="Enter email"  value="{{$customer->email}}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" id="customer-address" name="address" placeholder="Enter address"  value="{{$customer->address}}">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" id="customer-phone-number" name="phone" placeholder="Enter phone number"  value="{{$customer->phone_number}}">
                        </div>
                        <div class="form-group">
                            <label >Note</label>
                            <input type="text" class="form-control" id="customer-note" name="note" placeholder="Enter note"  value="{{$customer->note}}">
                        </div>
                        <div class="form-group">
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
        }
    </script>
@endsection
