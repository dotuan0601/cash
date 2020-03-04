@extends('admin_template')

@section('htmlheader_title')
    Danh sách sản phẩm
@endsection

@section('contentheader_title')
    Danh sách sản phẩm
@endsection

@section('contentheader_description')
   Quản lý sản phẩm
@endsection

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách sản phẩm</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-striped">
                        <thead>
                        <tr>

                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Giới thiệu</th>
                            <th style="width: 40% !important;">Mô tả</th>
                            <th>Danh mục</th>
                            <th>Vị trí</th>
                            <th>Hiển thị ngoài trang chủ</th>
                            <th>Ngày tạo</th>
                            <th>Tác động</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <td><img src="{{$product->feather_image}}" height="100px"  width="100px"></td>
                                <td>{{$product->name}}</td>
                                <td>{!! $product->sort_description !!}</td>
                                <td>{!! $product->description !!}</td>
                                <td>{{$arrCates[$product->category_id]}}</td>
                                <td>{{$product->position}}</td>
                                <td>{{$product->show_homepage}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                
                                    <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}"
                                       class="btn btn-flat btn-info">
                                        <i class="fa fa-search"></i> Sửa
                                    </a>


                                    <form class="inline" method="POST"  onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');"
                                          action="{{ route('admin.product.destroy', ['id' => $product->id]) }}">
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
                    <a href="{{ route('admin.product.create') }}" class="btn btn-flat btn-primary">Thêm sản phẩm mới</a>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent


    <script>

        $(document).ready(function() {
            // Setup - add a text input to each footer cell

            // DataTable
            var table = $('#index-box').DataTable();

            // Apply the search

            $('#index-box').parent('div').addClass('table-responsive')
        } );
    </script>
@endsection


