@extends('admin.layout.layout')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dịch vụ
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:70px">
             @if(count($errors)>0)
             <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{ $err }}<br>
                @endforeach
            </div>
            @endif
            @if(session('errfile'))
                <div class="alert alert-danger">
                    <strong>{{session('errfile')}}</strong>
                </div>
            @endif

            <form action="admin/service/add" method="Post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="name" id="title" class="form-control" placeholder="Nhập Tiêu Đề">
                </div>
                 <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" name="slug" id="slug" class="form-control"placeholder="Được tạo tự động" >
                </div>
               
                <div class="form-group">
                    <label>Tóm Tắt</label>
                    <textarea name="des" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Nội Dung</label>
                    <textarea name="content" id="demo" class="form-control ckeditor" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="img_post" class="form-control">
                </div>
                <div class="form-group">
                    <label>Giá dịch vụ</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Có thể để trống" >
                    <label></label>
                </div>
                
                <button type="reset" class="btn btn-default">Làm Mới</button>
                <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
            </form>
         
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
<script src="js/slug.js"></script>
<script>
    $(document).ready(function(){
        var options = {
                filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
                filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
              };
        CKEDITOR.replace('demo', options);
        $('.js-example-basic-multiple').select2();
         $('#title').keyup(function(event) {
                var title = $('#title').val();
                var slug = ChangeToSlug(title);
                $('#slug').val(slug);
            });
    });
</script>
<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<script src="js/select2.min.js"></script>
<script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
@endsection