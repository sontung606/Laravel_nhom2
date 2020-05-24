@extends('admin.master')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('header')
    List Products
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Products</li>
@endsection
@section('main-content')
{{--    Bang liet ke cac san pham--}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All products</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Link</th>
                <th>image</th>
                <th></th>
                <th></th>
                
            </tr>
            </thead>
            <tbody>
            @foreach($slide as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->link}}</td>
                    <td>{{$item->image}}</td>
                    <td> <img width="10%" src="{{ URL::asset('source/image/slide/'.$item->image) }}"></td>
                    <td>  
                        <a href="/delete-slide/{{$item->id}}" class="btn btn-danger">Remove</a>
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
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
               
            });
        });
    </script>
    <script>
         function getImageUrl(){
    return asset($this->image);
}
    </script>
@endsection
