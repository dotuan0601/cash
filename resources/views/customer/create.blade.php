@extends('admin_template')


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Khách hàng mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('admin.customer.store') }}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="feature_image" class="col-md-2 control-label">Ảnh đại diện</label>


                            <div class="col-md-5">
                                <input type="file" multiple id="avatar" name="avatar[]">
                                <div class="gallery-avatar"></div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customerName" class="col-md-2 control-label">Tên</label>

                            <div class="col-md-5">
                                <input class="form-control" id="customerName" name="name" placeholder="Tên"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="customerPhone" class="col-md-2 control-label">Số điện thoại</label>

                            <div class="col-md-5">
                                <input class="form-control" id="customerPhone" name="phone" placeholder="Số điện thoại"
                                       type="text" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="customerEmail" class="col-md-2 control-label">Email</label>

                            <div class="col-md-5">
                                <input class="form-control" id="customerPhone" name="email" placeholder="Email"
                                       type="email" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="customerIdentity" class="col-md-2 control-label">CMND/Passport</label>

                            <div class="col-md-5">
                                <input type="file" multiple id="identity" name="identity[]">
                                <div class="gallery-customer"></div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="customerProvince" class="col-md-2 control-label">Tỉnh thành</label>

                            <div class="col-md-5">
                                <select required class="form-control"  id="customerProvince" name="province">
                                    <option value="">Chọn tỉnh</option>
                                    @foreach($provinces as $province)
                                        <option value="{{$province['id']}}">{{$province['name']}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="customerDistrict" class="col-md-2 control-label">Quận huyện</label>

                            <div class="col-md-5">
                                <select required class="form-control"  id="customerDistrict" name="district">
                                    <option value="">Chọn quận huyện</option>
                                </select>
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
    <script>
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result)
                            .attr('width', '200px').attr('height', '200px').appendTo(placeToInsertImagePreview);
                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#identity').on('change', function() {
            imagesPreview(this, 'div.gallery-customer');
        });

        $('#avatar').on('change', function() {
            imagesPreview(this, 'div.gallery-avatar');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#customerProvince').on('change', function (e) {
                if (e.target.value) {
                    $('#customerDistrict').html('<option value="">Chọn quận huyện</option>');
                }
                $.ajax({
                    url: '/admin/district/searchByProvince/' + e.target.value,
                    success: (data) => {
                        let listDistricts = JSON.parse(data);
                        let htmlDistricts = '<option value="">Chọn quận huyện</option>';
                        for (let i = 0; i < listDistricts.length; i ++) {
                            htmlDistricts += '<option value="' + listDistricts[i].id + '">' + listDistricts[i].prefix +
                                ' ' + listDistricts[i].name + '</option>';
                        }
                        $('#customerDistrict').html(htmlDistricts);
                    }
                });
            })
        })
    </script>

@endsection
