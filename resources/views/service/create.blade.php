@extends('admin_template')


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Dịch vụ Mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" action="{{ route('admin.service.store') }}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="feather_image" class="col-md-2 control-label">Ảnh đại diện</label>


                            <div class="col-md-5">
                                <input class="form-control col-md-10 " id="feather_image" name="feather_image"
                                       placeholder="featherImage"
                                       type="text">

                            </div>
                            <div class="col-md-2">
                                <a id="lfm" data-input="feather_image" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Chọn ảnh
                                </a>
                            </div>
                            <div class="col-md-3">
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tên</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="name" placeholder="Tên"
                                       type="text" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tóm tắt</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="summary" placeholder="Tóm tắt"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Mô tả</label>

                            <div class="col-md-5">
                                <textarea class="form-control" id="description" name="description" placeholder="Mô tả"
                                          type="text" ></textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">ICON</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="icon" placeholder="Icon"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Giá</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="price" placeholder="Giá"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Thứ tự</label>

                            <div class="col-md-5">
                                <input class="form-control" id="categoryName" name="order" placeholder="Thứ tự"
                                       type="number" value="0" required>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix no-border">
                        <button type="submit" class="btn btn-flat btn-primary">Cập nhật</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '{{route('unisharp.lfm.show')}}?type=Images',
            filebrowserImageUploadUrl: '{{route('unisharp.lfm.upload')}}?type=Images&_token=',
            filebrowserBrowseUrl: '{{route('unisharp.lfm.show')}}?type=Files',
            filebrowserUploadUrl: '{{route('unisharp.lfm.show')}}?type=Files&_token='
        };
    </script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});

        /*   $('#lfm').filemanager('image');*/
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
         CKEDITOR.replace('description', options);
  //         CKEDITOR.replace('summary', options);

    </script>

@endsection
