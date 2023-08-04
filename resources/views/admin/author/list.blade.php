@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">Author
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="form-group">
                <a href="{{route('register')}}"  class="btn btn-success" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Author</a>
              
            </div>
            <table class="table table-striped table-bordered table-hover" id="tag_list">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Tạo Lúc</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                @foreach($model as $md)
                     <tr class="text-center">
                        <th>{{$md->id}}</th>
                         <th>{{$md->name}}</th>
                          <th>{{$md->email}}</th>
                           <th>{{$md->created_at}}</th>
                           <th><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#show-delete">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xoá
                    </button></th>
                        
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<!-- Modal Add-->


<!-- Modal Delete-->
<div class="modal fade" id="show-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Author</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa </p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" id="delete">Xóa</button>
            </div>
            </form> 
        </div>
    </div>
  </div>
</div>

@endsection
@section('script')
 <!-- DataTables JavaScript -->

   <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
   <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   <script src="js/bootstrap-flash-alert.js"></script>
@endsection
