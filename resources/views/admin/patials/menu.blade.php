 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li style="display: none;">
                <a href="{{route('profile.edit')}}"><i class="fa fa-user fa-fw"></i> Cá Nhân</a>
            </li>

            <li>
                <a href="admin/post"><i class=" fa fa-cubes fa-fw"></i> Dịch vụ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/service"> Danh Sách Dịch vụ</a>
                    </li>
                    <li>
                        <a href="admin/service/add"> Thêm Dịch vụ</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/category"><i class="fa fa-table fa-fw"></i> Danh mục bài viết<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/category">Danh Sách</a>
                    </li>
                    <li>
                        <a href="admin/category/add">Thêm Danh Mục</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/tag"><i class="fa fa-tags fa-fw"></i> Tags</a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/post"><i class="fa fa-pencil fa-fw"></i> Bài viết<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    
                    <li>
                        <a href="admin/post"> Danh Sách Bài Viết</a>
                    </li>
                    <li>
                        <a href="admin/post/add"> Thêm Bài Viết</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
           
             

            <li>
                <a href="laravel-filemanager?type=Images&CKEditor=demo&CKEditorFuncNum=1&langCode=en"><i class="fa fa-file-image-o fa-fw"></i> Tệp tin</a>
            </li>

            
            <li>
                <a href="admin/contact"><i class="fa fa-envelope fa-fw"></i> Phản hồi</a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/author"><i class="fa fa-users fa-fw"></i> Quản lý Author</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>