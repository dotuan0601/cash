@extends('admin_template')

@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin đặt lịch</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="index-box" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>SĐT</th>
                            <th>Thời gian đặt lịch</th>
                            <th>Dịch Vụ</th>
                            <th>Mã khuyến mại</th>
                            <th>Giá</th>
                            <th>Salon</th>
                            <th>Trạng thái</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{$booking->id}}</td>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->phone}}</td>
                                <td>{{$booking->scheduled_at}}</td>
                                <td>{{$booking->service_name}}</td>
                                <td>{{$booking->coupon}}</td>

                                <td>{{$booking->price}}</td>
                                <td>{{$booking->salon_name}}</td>
                                <td> <input class="checkStatus" data-id="{{$booking->id}}" type="checkbox" name="status" @if($booking->status == 1) checked @endif value="1">Đã Đến</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->



            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('script')
    @parent


    <script>
        $( ".checkStatus" ).change(function() {
          var booking_id = $(this).attr('data-id');
           $.ajax({
                url: '{{route('admin.booking.changeStatus')}}' + '/'+booking_id,
                method: 'GET',
                dataType: 'json',
                success: function (data) {

                  //  bootbox.alert('Khách đã đến' );

                },
                error: function () {
                  //  bootbox.alert('Khách chưa đến');
                }
            });
            console.log('change');
        });
    </script>
    <script>
        $(function () {
            $('#index-box').DataTable({"order": [[ 0, "desc" ]]});
            $('#index-box').parent('div').addClass('table-responsive')
        });

    </script>
@endsection


