@extends('admin_template')



@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Chuyên Mục Mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" method="post" action="{{ route('admin.category.store') }}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="box-body">
                     
                        <div class="form-group">
                            <label for="categoryName" class="col-md-2 control-label">Tên</label>

                            <div class="col-md-10">
                                <input class="form-control" id="categoryName" name="name" placeholder="Name"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoryParent" class="col-md-2 control-label">Phân cấp</label>

                            <div class="col-md-10">
                                <select class="form-control" id="categoryParent" name="parent_id">
                                    <option value="0">/</option>
                                    @foreach($parents as $parent)
                                        <option value="{{$parent->id}}">{{$parent->path}}</option>
                                    @endforeach
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


