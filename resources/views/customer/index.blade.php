@extends('admin_template')


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách Khách hàng</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh đại diện</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>CMND/Passport</th>
                            <th>Địa chỉ</th>

                            <th>Tác động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                @php(
                                    $customer_feature_img = explode(';', $customer->feature_image)
                                )
                                <td>
                                    @foreach($customer_feature_img as $f_img)
                                        <img src="{{url('/photos/customers') . '/' . $f_img}}" height="100px"  width="100px" style="margin-bottom: 2px">
                                    @endforeach
                                </td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->email}}</td>
                                @php(
                                    $customer_identity_img = explode(';', $customer->identity)
                                )
                                <td>
                                    @foreach($customer_identity_img as $i_img)
                                        <img src="{{url('/photos/customers') . '/' . $i_img}}" height="100px"  width="100px" style="margin-bottom: 2px">
                                    @endforeach
                                </td>
                                <td>{{\App\District::where('id', $customer->district)->first()->name . ' - ' .
                                \App\Province::where('id', $customer->province)->first()->name}}</td>

                                <td>

                                    <a href="{{ route('admin.customer.edit', ['id' => $customer->id]) }}"
                                       class="btn btn-flat btn-warning">
                                        <i class="fa fa-edit"></i> Sửa
                                    </a>


                                    <form class="inline" method="POST"  onsubmit="return confirm('Bạn có chắc chắn muốn xóa nội dung này không?');"
                                          action="{{ route('admin.customer.destroy', ['id' => $customer->id]) }}">
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
                    <a href="{{ route('admin.customer.create') }}" class="btn btn-flat btn-primary">Thêm khách hàng mới</a>
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
            $('#index-box').DataTable({
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ khách hàng trên trang",
                    "zeroRecords": "Không có khách hàng nào",
                    "info": "Hiển thị trang _PAGE_ / _PAGES_",
                    "infoEmpty": "Không có khách hàng nào",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Tìm kiếm",
                    "paginate": {
                        "first":      "Trang đầu",
                        "last":       "Trang cuối",
                        "next":       "Trang tiếp",
                        "previous":   "Trang trước"
                    },
                },
                "fnDrawCallback": function(oSettings) {
                    if ($('#index-box tr').length < 11) {
                        $('.dataTables_info').hide();
                        $('.dataTables_paginate').hide();
                    }
                },
                "dom": 'Bfrtip',
                "buttons": [
                    'excel'
                ]
            });
            $('#index-box').parent('div').addClass('table-responsive')
        });
    </script>
@endsection


