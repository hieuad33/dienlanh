@extends('admin.layout.layout')
@section('content')     
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">Chuyên Mục
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="cate_list">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Đường Dẫn</th>
                        <th>ID Mục Cha</th>
                        <th>Số Bài</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- Modal Update-->
<div class="modal fade" id="show-update" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Chỉnh Sửa Chuyên Mục</h4>
        </div>
        <div class="modal-body">
            <form id="form-update">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Tên Chuyên Mục</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" class="form-control" id="cate-name" name="cate-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Đường dẫn</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Chuyên Mục Cha</label>
                        <select class="form-control" id="parent" name="parent">
                            @foreach($cates as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @endforeach
                        </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="save">Lưu Thay Đổi</button>
                  </div>
            </form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Delete-->
<div class="modal fade" id="show-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Chuyên Mục</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa chuyên mục <strong id="del-name"></strong> cũng như các bài viết trong đó?</p>
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
<script src="{{asset('js/slug.js')}}"></script>
 <!-- DataTables JavaScript -->
 <script type="text/javascript">
    $(document).ready(function() {
        //creat slug
         $('#cate-name').keyup(function(event) {
            var title = $('#cate-name').val();
            var slug = ChangeToSlug(title);
            $('#slug').val(slug);
        });
        /* Get datatable from  route('data') */
        var datatable = $('#cate_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('data') !!}',
            columns: [
                { data: 'category_id', name: 'category_id' },
                { data: 'name', name: 'name' },
                { data: 'slug', name: 'slug' },
                { data: 'parent_id', name: 'parent_id' },
                { data: 'post_count', name: 'post_count' },
                { data: 'action', name: 'action' },
            ]
        });
        /* Bind data record to form modal*/
        $('#show-update').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var currentRow = button.closest("tr");
            var id=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var name=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
            var slug=currentRow.find("td:eq(2)").text(); // get current row 2nd TD
            var sl_name=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
            var modal = $(this);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #cate-name').val(name);
            modal.find('.modal-body #slug').val(slug);
            if( sl_name ) modal.find('.modal-body #parent').val(sl_name)
            else { modal.find('.modal-body #parent').val(null) }
        });
        /* Send request update Ajax*/
        $("#form-update").on( "submit", function( event ) {
            event.preventDefault();
            $.ajax({
                url: 'admin/category/update',
                type: 'Post',
                data: $(this).serialize(),
            })
            .done(function(data) {
                if(data==='ok'){
                    datatable.ajax.reload();
                    $('#show-update').modal('hide');
                    $.alert("Cập Nhật Thành Công",{
                        autoClose: true,  closeTime: 3000, type: 'success',
                        position: ['top-right', [45, 30]],
                        withTime: 200,
                        title: 'Thành Công',
                        icon: 'glyphicon glyphicon-ok',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                } else {
                    datatable.ajax.reload();
                    $('#showupdate').modal('hide');
                    $.alert(data,{
                        autoClose: true,  closeTime: 3000, type: 'danger',
                        position: ['top-right', [50, 30]],
                        withTime: 200,
                        title: 'Có lỗi', // title
                        icon: 'glyphicon glyphicon-remove',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                }
            })
            .fail(function() {
                datatable.ajax.reload();
                    $('#show-update').modal('hide');
                    $.alert("Có Lỗi",{
                        autoClose: true,  closeTime: 3000, type: 'danger',
                        position: ['top-right', [50, 30]],
                        withTime: 200,
                        title: 'Có lỗi đã xảy ra.', // title
                        icon: 'glyphicon glyphicon-remove',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                });
            })
        });

        /* Bind cate name to modal*/
        $('#show-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var currentRow = button.closest("tr");
            var id=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
            var name=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
            var modal = $(this);
            modal.find('.modal-body #del-name').html(name);
            modal.find('.modal-body #del-id').val(id);
        });
        /* Send request delete Ajax*/
        $("#form-delete").on( "submit", function( event ) {
            event.preventDefault();
            $.ajax({
                url: 'admin/category/delete',
                type: 'Put',
                data: $(this).serialize(),
            })
            .done(function(data) {
                if(data==='ok'){
                    datatable.ajax.reload();
                    $('#show-delete').modal('hide');
                    $.alert("Xóa Thành Công",{
                        autoClose: true,  closeTime: 3000, type: 'success',
                        position: ['top-right', [45, 30]],
                        withTime: 200,
                        title: 'Thành Công', // title
                        icon: 'glyphicon glyphicon-ok',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                } else {
                    datatable.ajax.reload();
                    $('#show-delete').modal('hide');
                    $.alert("Có Lỗi",{
                        autoClose: true,  closeTime: 3000, type: 'danger',
                        position: ['top-right', [50, 30]],
                        withTime: 200,
                        title: 'Có lỗi đã xảy ra.', // title
                        icon: 'glyphicon glyphicon-remove',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                    });
                }
            })
            .fail(function() {
                datatable.ajax.reload();
                    $('#show-update').modal('hide');
                    $.alert("Có Lỗi",{
                        autoClose: true,  closeTime: 3000, type: 'danger',
                        position: ['top-right', [50, 30]],
                        withTime: 200,
                        title: 'Có lỗi đã xảy ra.', // title
                        icon: 'glyphicon glyphicon-remove',
                        animation: true,
                        animShow: 'fadeIn',
                        animHide: 'fadeOut',
                });
            })
        });
    });
 </script>
   <script src="{{asset('admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
   <script src="{{asset('js/bootstrap-flash-alert.js')}}"></script>
@endsection
