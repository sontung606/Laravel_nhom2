@extends('admin.master')
@section('header')
    Add Customer
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Customer</li>
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
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('add-customer')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Customer name">Name</label>
                            <input type="text" class="form-control" id="customer-name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" id="customer-gender" name="gender" placeholder="Enter gender">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="customer-email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" id="customer-address" name="address" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" id="customer-phone-number" name="phone" placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label >Note</label>
                            <input type="text" class="form-control" id="customer-note" name="note" placeholder="Enter note">
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
