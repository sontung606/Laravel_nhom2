@extends('admin.master')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('header')
List customers
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">Customer</li>
@endsection
@section('main-content')
{{-- Bang liet ke cac nguoi dung--}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All customers</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone_number}}</td>
                    <td>{{$item->note}}</td>
                    <td>
                        <a href="/edit-customer/{{$item->id}}" class="btn btn-primary">Edit</a>
                        <a href="/delete-customer/{{$item->id}}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
@section('script')
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script>
    $(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection