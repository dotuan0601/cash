@extends('admin_template')


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách Banner</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Thời gian tạo</th>

                            <th>Tác động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{$banner->id}}</td>
                                <td>{{$banner->name}}</td>
                                <td><img src = "{{$banner->feather_image}}" width="100px"></td>
                                <td>{{$banner->created_at}}</td>

                                <td>

                                    <a href="{{ route('admin.banner.edit', ['id' => $banner->id]) }}"
                                       class="btn btn-flat btn-warning">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>


                                    <form class="inline" method="POST"  onsubmit="return confirm('Bạn có chắc chắn muốn xóa nội dung này không?');"
                                          action="{{ route('admin.banner.destroy', ['id' => $banner->id]) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <button class="btn btn-flat btn-danger" type="submit">
                                            <i class="fa fa-trash"></i> Xóa
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer clearfix no-border">
                    <a href="{{ route('admin.banner.create') }}" class="btn btn-flat btn-primary">Thêm banner mới</a>
                </div>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent



    <script>
        $(function () {
            $('#index-box').DataTable();
            $('#index-box').parent('div').addClass('table-responsive')
        });
    </script>
@endsection


