<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
@include('layout.htmlheader')
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('layout.mainheader')

    @include('layout.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

       {{-- @include('layout.contentheader')--}}

                <!-- Main content -->
        <section class="content">
            <!-- Error display -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Đã có lỗi xảy ra trong quả trình xử lý</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
                        <!-- Your Page Content Here -->
                @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layout.footer')

</div><!-- ./wrapper -->

@include('layout.scripts')

</body>
</html>
