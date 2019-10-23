<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <!-- Optionally, you can add icons to the links -->



            <li class="treeview">
                <a href="#">
                    <i class='fa fa-users'></i>
                    <span>Quản lý Admin</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.user.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.user.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class='fa fa-shopping-basket'></i>
                    <span>Quản lý Salon</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.salon.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.salon.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
           {{-- <li class="treeview">
                <a href="#">
                    <i class='fa fa-file-image-o'></i>
                    <span>Quản lý Banner</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.banner.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.banner.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>--}}
      {{--      <li class="treeview">
                <a href="#">
                    <i class='fa fa-file-image-o'></i>
                    <span>Quản lý Chuyên Mục</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.category.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.category.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>--}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text" ></i>
                    <span>Quản lý Blog</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.post.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.post.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text" ></i>
                    <span>Quản lý Khuyến Mại</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.promotion.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.promotion.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text" ></i>
                    <span>Quản lý Zio TV</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.tv.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.tv.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text" ></i>
                    <span>Quản lý Video (Blog tóc đẹp)</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.video.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.video.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text" ></i>
                    <span>Quản lý Dịch Vụ</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.service.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>

                    <li>
                        <a href="{{route('admin.service.create')}}">
                            <i class="fa fa-plus-square"></i>
                            Thêm Mới</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bookmark-o" ></i>
                    <span>Quản lý Đặt Chỗ</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{route('admin.booking.index')}}">
                            <i class="fa fa-list-alt"></i>
                            Danh Sách</a>
                    </li>


                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
