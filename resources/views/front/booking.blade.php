@extends('front.layout.template')

@section('main-content')
    <header class="masthead text-center text-white d-flex" id="zio-booking">
        <div class="container my-auto header-booking" id="step1">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <i class="icon-zio"></i>
                    <h1 class="text-uppercase">
                        <strong>Đặt lịch Salon</strong>
                    </h1>
                    <p class="text-faded mb-5 mt-4">Zio Booking là hệ thống đặt lịch salon trực truyến với chuỗi 10 salon tóc trên khắp Hà Nội. Chúng tôi cam kết mang đến những dịch vụ làm tóc tốt nhất hiện nay</p>
                </div>


                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="select_mate" id="salon">
                                    <option></option>
                                    @foreach($salons as $salon)
                                        <option value="{{$salon->id}}">{{$salon->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="select_mate" id="sex">
                                    <option></option>
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="select_mate" id="service">
                                    <option></option>
                                    @foreach($services as $service)
                                        <option data-price="{{$service->price}}" value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <p><a class="btn btn-yellow-da btn-xl js-scroll-trigger mt-5" href="#" id="buttonStep1">Đặt lịch</a></p>
                </div>



            </div>
        </div>


        <div class="container my-auto header-booking" id="step2" style="display: none">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="booking-title">Anh chị vui lòng chọn ngày giờ</h2>
                    <ul class="booking-date">
                        <li class="booking-active">
                            <a >
                                <p>Hôm nay</p>
                                <p class="booking-date-1"> {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                            </a>
                        </li>
                        <li>
                            <a >
                                <p>Ngày mai</p>
                                <p class="booking-date-1"> {{\Carbon\Carbon::tomorrow()->format('d/m/Y')}}</p>
                            </a>
                        </li>
                        <li>
                            <a >
                                <p>Ngày kia</p>
                                <p class="booking-date-1"> {{\Carbon\Carbon::now()->addDays(2)->format('d/m/Y')}}</p>
                            </a>
                        </li>
                    </ul>
                    <table id="timelineTable" class="table table-bordered booking-time">
                        <tbody>

                        </tbody>
                    </table>
                    <div class="booking-notifi">
                        <p><i class="icon-green"></i> Mời anh chị chọn</p>
                        <p><i class="icon-red"></i> Salon đông quá rồi ạ!</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <h2 class="booking-title">Thông tin đặt salon</h2>
                    <form method="POST" id="bookingForm" action="{{route('booking.store')}}">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" id="salon_id" name="salon_id" value="">
                        <input type="hidden" id="salon_name" name="salon_name" value="">
                        <input type="hidden" id="service_name" name="service_name" value="">
                        <input type="hidden" id="service_id" name="service_id" value="">
                        <input type="hidden" id="scheduled_at" name="scheduled_at" value="">
                        <input type="hidden" id="price" name="price" value="">

                        <div class="booking-info">
                            <i class="fa fa-map-marker"></i>
                            <p>Cơ sở:</p>
                            <h3 id="textSalon"></h3>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-cut"></i>
                            <p>Dịch vụ:</p>
                            <h3 id="textService"></h3>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-dollar"></i>
                            <p>Chi phí:</p>
                            <h3 id="textPrice"></h3>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-calendar"></i>
                            <p>Ngày:</p>
                            <h3 id="textDate">{{\Carbon\Carbon::now()->format('d/m/Y')}}</h3>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-clock-o"></i>
                            <p>Giờ:</p>
                            <h3 id="textTime">15:00</h3>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-user-o"></i>
                            <p>Họ tên:</p>
                            <input class="form-control form-booking-info" name="name" type="text" placeholder="Anh chị vui lòng nhập tên *" required>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-mobile" style="font-size: 22px; margin-top: 5px;"></i>
                            <p>Số ĐT:</p>
                            <input class="form-control form-booking-info" type="text" name="phone" placeholder="Anh chị vui lòng nhập số điện thoại *" required>
                        </div>
                        <div class="booking-info">
                            <i class="fa fa-percent"></i>
                            <p>Mã ưu đãi:</p>
                            <input class="form-control form-booking-info" name="coupon" type="text" placeholder="">
                        </div>
                        <div class="booking-info mt-3">
                            <a  class="link-back" id="buttonBack"><i class="fa fa-angle-double-left"></i> Quay lại</a>
                            <input type="submit" class="btn btn-yellow btn-xl js-scroll-trigger" value="Xác nhận đặt lịch">
                            {{--
                                                    <a class="btn btn-yellow btn-xl js-scroll-trigger" href="javascript:document.getElementById('bookingForm').submit();"  id="Confirm">Xác nhận đặt lịch</a>
                            --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </header>

   <!--  <a class="btn btn-yellow btn-xl js-scroll-trigger" href=""  data-toggle="modal" data-target="#exampleModal-sucsse">Thành công</a>
    <a class="btn btn-yellow btn-xl js-scroll-trigger" href=""  data-toggle="modal" data-target="#exampleModal-error">Báo lỗi</a> -->

    <style type="text/css">
        a .booking-red {
            pointer-events: none;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document ).ready(function() {
            $(".js-scroll-trigger").removeClass('active');
            $("#abooking").addClass('active');
            $("#salon").select2({
                placeholder: 'Vui lòng chọn Salon',
                allowClear: true});
            $("#sex").select2({
                placeholder: 'Vui lòng chọn Giới Tính',
                allowClear: true});
            $("#service").select2({
                placeholder: 'Vui lòng chọn Dịch Vụ',
                allowClear: true});

            $("#buttonStep1").on('click touchend', function() {
                /*
                     validate form.
                 */
                if ($("#salon").val() == '' || $("#sex").val() == '' || $("#service").val() == '' ) {
                    $("#messError").html('');
                    $("#messError").html('Dữ liệu đặt lịch chưa được điền đầy đủ');
                    $('#exampleModal-error').modal('show');

                    return false;
                } else {
                    $("#step1").hide();
                    $("#step2").show();
                    $("#textSalon").html($("#salon :selected").html());
                    $("#textService").html($("#service :selected").html());
                    $("#salon_id").val($("#salon :selected").val());
                    $("#textPrice").html($("#service :selected").data('price'));
                    $("#price").val($("#service :selected").data('price'));
                    $("#salon_name").val($("#salon :selected").html());
                    $("#service_id").val($("#service :selected").val());
                    $("#service_name").val($("#service :selected").html());
                    var m = new Date();
                    var fommatDate = m.getUTCFullYear() + "-" +
                        ("0" + (m.getUTCMonth()+1)).slice(-2) + "-" +
                        ("0" + m.getUTCDate()).slice(-2) ;
                    $.ajax({
                        method: "GET",
                        url: "{{route('timeline')}}"+"/"+ fommatDate+ "/"+ $("#salon_id").val(),

                    })
                        .done(function( msg ) {

                            $("#timelineTable").html('');
                            $("#timelineTable").html(msg);
                            $(".table td").on('click touchend',function(){ // don't need each (click does this internally)
                                // don't need each (click does this internally)
                                console.log('click td');
                                $(this).parent().parent()//add cell-selected class to a
                                    .find('td') //look at siblings
                                    .removeClass('booking-time-active'); //remove the class
                                $(this).addClass('booking-time-active');
                               // $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                                var child =  $(this).find('.booking-red');
                                if(child.length > 0) {

                                   // bootbox.alert("Khung giờ này đã hết chỗ. Vui Lòng chọn lại");
                                    $("#messError").html('');
                                    $("#messError").html('Khung giờ này đã hết chỗ. Vui Lòng chọn lại');
                                    $('#exampleModal-error').modal('show');
                                } else {
                                    console.log('green');
                                    $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                                }
                            });
                        });

                }

            });
            $("#buttonBack").on('click touchend', function() {
                $("#step1").show();
                $("#step2").hide();
            });
            $(".booking-date li").on('click touchend',function(){ // don't need each (click does this internally)
                console.log('click ui');
                $(this).addClass('booking-active') //add cell-selected class to a
                    .siblings() //look at siblings
                    .removeClass('booking-active'); //remove the class
                $("#textDate").html($(this).find(".booking-date-1").html().replace(/(<([^>]+)>)/ig,""));
                //change ajax
                var date = $("#textDate").html().trim();
               var fommatDate = date.split("/")[2]+"-"+date.split("/")[1]+"-"+date.split("/")[0];
                $.ajax({
                    method: "GET",
                    url: "{{route('timeline')}}"+"/"+ fommatDate+ "/"+ $("#salon_id").val(),

                })
                    .done(function( msg ) {

                        $("#timelineTable").html('');
                        $("#timelineTable").html(msg);
                        $(".table td").on('click touchend',function(){ // don't need each (click does this internally)

                            $(this).parent().parent()//add cell-selected class to a
                                .find('td') //look at siblings
                                .removeClass('booking-time-active'); //remove the class
                            $(this).addClass('booking-time-active');
                         //   $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                            var child =  $(this).find('.booking-red');
                            if(child.length > 0) {
                              //  bootbox.alert("Khung giờ này đã hết chỗ. Vui Lòng chọn lại");
                                $("#messError").html('');
                                $("#messError").html('Khung giờ này đã hết chỗ. Vui Lòng chọn lại');
                                $('#exampleModal-error').modal('show');
                            } else {
                                $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                            }
                        });

                    });
            });
            $(".table td").on('click touchend',function(){ // don't need each (click does this internally)
                $(this).parent().parent()//add cell-selected class to a
                    .find('td') //look at siblings
                    .removeClass('booking-time-active'); //remove the class
                $(this).addClass('booking-time-active');
            //    $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                var child =  $(this).find('.booking-red');
                if(child.length > 0) {
                //    bootbox.alert("Khung giờ này đã hết chỗ. Vui Lòng chọn lại");
                    $("#messError").html('');
                    $("#messError").html('Khung giờ này đã hết chỗ. Vui Lòng chọn lại');
                    $('#exampleModal-error').modal('show');
                } else {
                    $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                }
            });
            $('#bookingForm').submit(function( e ) {
                console.log('submit Form');

                e.preventDefault();
                var date = $("#textDate").html().trim();
                var time = $("#textTime").html().trim();
                var dateTime = date + " " + time; // format d/m/Y HH:mm
                $("#scheduled_at").val(dateTime);
                var form = $(this);
                $.ajax({
                    url: form.attr('action'),
                    method: form.attr('method'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function (data, textStatus, xhr) {


                        if(data.code == 'success'){
                                $("#messSucc").html('');
                            $("#messSucc").html(data.message);
                            $('#exampleModal-sucsse').modal('show');
                        }
                        if(data.code == 'fail'){
                            $("#messError").html('');
                            $("#messError").html(data.message);
                            $('#exampleModal-error').modal('show');
                        }

                    },
                    error: function () {

                        $("#messError").html('');
                        $("#messError").html('Hệ thống lỗi. Vui lòng thử lại sau');
                        $('#exampleModal-error').modal('show');
                    }
                });

                return false;
            });
        });

    </script>

<!-- ĐỨC ANH COMMENT 06/03/2019 -->


    <!-- Modal SUCCES -->
<div class="modal fade" id="exampleModal-sucsse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img style="margin-top: -50px;" src="{{asset('front_components/img/sucsse.png')}}" />
        <h3 class="text-uppercase" style="color:#6ec508; margin-top: 20px; font-size: 20px;">Đặt lịch thành công !</h3>
        <p>Cám ơn bạn đã sử dụng dịch vụ của chúng tôi.</p>
      </div>
      <div class="modal-footer text-center">
        <div class="hr-modal"></div>
        <div class="modal-footer-da">
          <h4 class="text-uppercase" style=" font-size:18px; color:#143346" id="messSucc">Hẹn gặp bạn tại Zio Vô Văn Dũng vào:</h4>
         {{-- <p>11:00 - Ngày 05/03/2019 </p>--}}
        </div>
      </div>
      
    </div>
  </div>
</div>

    <!-- Modal Error -->
<div class="modal fade" id="exampleModal-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img style="margin-top: -50px;" src="{{asset('front_components/img/error.png')}}" />
        <h3 class="text-uppercase" style="color:#e24c4b; margin-top: 20px; font-size: 20px;">Có lỗi xảy ra!</h3>
        <p id="messError">Dữ liệu đặt lịch chưa được điền đầy đủ</p>
      </div>
      
    </div>
  </div>
</div>

<style>
  .modal-dialog{    margin-top: 100px;}
  .modal-header{border-bottom: none;}
  .modal-footer{padding:0; border-top: none; display: block;}
  .hr-modal{background: url({{asset('front_components/img/hr-modal.svg')}}); background-size: cover; min-height: 60px; width: 100%;}
  .modal-body p{margin-bottom: 0;}
  .modal-footer>:not(:last-child){margin-right: 0;}
  .modal-footer>:not(:first-child){margin-left: 0;}
  .modal-footer-da{width: 100%; background: #f1f1f1;color:#143346; padding:15px 0;}
</style>


<!-- ĐỨC ANH COMMENT 06/03/2019 -->


@endsection