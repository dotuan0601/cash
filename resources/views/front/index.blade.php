
@extends('front.layout.template')
@section('meta-data')
    <meta property="og:url" content="{{route('home')}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="ZIO SALON"/>
    <meta property="og:description" content="ZIO Hair là chuỗi salon hàng đầu trong lĩnh vực tạo hình và chăm sóc tóc theo phong cách Hàn Quốc tại Hà Nội"/>
    <meta property="og:image" content="http://zio.com.vn/photos/1/home_page.png"/>



@endsection
@section('main-content')
<style>
    #mainNav.navbar-shrink-da{background: none;}

</style>
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
                                    <option   value="{{$salon->id}}">{{$salon->name}}</option>
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
                        <input type="submit" class="btn btn-yellow btn-xl js-scroll-trigger" id="buttonSubmit" value="Xác nhận đặt lịch">
{{--
                        <a class="btn btn-yellow btn-xl js-scroll-trigger" href="javascript:document.getElementById('bookingForm').submit();"  id="Confirm">Xác nhận đặt lịch</a>
--}}
                    </div>
                    </form>
                </div>
            </div>
        </div>



    </header>


    <section id="zio-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zio-title mb-5">
                    <h2 class="section-heading">Dịch vụ</h2>
                    <hr class="my-4">
                    <p>Zio Booking là hệ thống đặt lịch salon trực truyến với chuỗi 10 salon tóc trên khắp Hà Nội.<br/> Chúng tôi cam kết mang đến những dịch vụ làm tóc tốt nhất hiện nay</p>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="services1-zio row display-b">
             @foreach($services as $service)
                <li class="text-center col-lg-4">
                    <a href="{{route('service')}}#{{$service->id}}">
                    <img src="{{$service->feather_image}}" class="img-responsive" />
                        <i class="{{$service->icon}}"></i>
                        <h1>{{$service->name}}</h1>
                        <p> {{$service->summary}}</p>
                    </a>
                    <a href="#" class="booking-zio">Đặt ngay</a>
                   

                </li>
             @endforeach
            </ul>
            <ul class="services1-zio row owl-carousel owl-carousel-service display-n">
             @foreach($services as $service)
                <li class="text-center item">
                    <a href="{{route('service')}}#{{$service->id}}">
                    <img src="{{$service->feather_image}}" class="img-responsive" />
                        <i class="{{$service->icon}}"></i>
                        <h1>{{$service->name}}</h1>
                        <p> {{$service->summary}}</p>
                    </a>
                    <a href="#" class="booking-zio">Đặt ngay</a>
                   

                </li>
             @endforeach   
            </ul>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><p><a class="nav-link js-scroll-trigger" href="#zio-promotion" style="text-decoration: underline;">Xem ngay khuyến mại</a></p></div>
            </div>
        </div>
    </section>


    <section id="zio-promotion" class="zio-promotion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zio-title mb-5">
                    <h2 class="section-heading">Ưu đãi - Giảm giá</h2>
                    <hr class="my-4">
                    <p>Đừng quên cập nhật những ưu đãi trên toàn hệ thống Zio Booking hàng tuần !</p>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-blog-sale">
                        @foreach($promotions as $promotion)
                        <div class="zio-promotion-item">
                            <a href="{{route('promotion_detail',['slug'=>$promotion])}}">
                                <img src="{{$promotion->feather_image}}" class="img-responsive" />
                                <i class="discount-stickers">Quà tặng</i>
                                <h3>{{$promotion->title}}</h3>
                                <button class="btn btn-border-yel-1">Xem chi tiết</button>
                            </a>
                        </div>
                      @endforeach
                    </div>
                </div>
                
            </section>
        </div>
    </section>


    <div class="info_zio">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>12</h4>
                    <p>SALON TRONG HỆ THỐNG ZIO BOOKING</p>
                </div>
                <div class="col-lg-4">
                    <h4>70+</h4>
                    <p>KHÁCH HÀNG ĐẶT LỊCH MỖI NGÀY</p>
                </div>
                <div class="col-lg-4">
                    <h4>2,000+</h4>
                    <p>TỔNG KHÁCH HÀNG ĐÃ SỬ DỤNG DỊCH VỤ</p>
                </div>
            </div>
        </div>
    </div>


     <section id="zio-promotion" class="zio-promotion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zio-title mb-5">
                    <h2 class="section-heading">ZIO TV</h2>
                    <hr class="my-4">
                    <p>Cập nhật tất tần tật xu hướng, mẫu tóc mới nhất tại Zio TV</p>
                </div>
            </div>
            <section class="row">
                <div class="col-lg-12">
                    <div class=" owl-carousel owl-carousel-tv">
                       
                       

                        @foreach($tvs as $tv)
                         <div class="zio-tv">
                            <a class="video-btn"  data-toggle="modal" data-src="{{$tv->link}}" data-target="#myModal">
                                <div class="showcase">
                                    <img src="{{$tv->feather_image}}" class="img-responsive">
                                    <div class="showcase-overlay">
                                        <div class="showcase-icons">
                                            <i class="fa fa-youtube-play"></i>
                                        </div>                            
                                    </div>
                                </div>
                                <h1>{{$tv->title}}</h1>
                            </a>
                        </div>
                        @endforeach
                        </div>
                </div>
                
            </section>


        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-4"><p><a href="https://www.youtube.com/channel/UCayvGtGqrREx868ebL0nQEQ" style="text-decoration: underline;">Đăng ký</a> kênh Zio TV ngay hôm nay để không bỏ lỡ xu hướng tóc mới nhất!</p></div>
            </div>
        </div>
    </section>    

    <section id="zio-blog" class="zio-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zio-title mb-5">
                    <h2 class="section-heading">Blog tóc đẹp</h2>
                    <hr class="my-4">
                    <p>Tuyển tập những kiểu tóc đẹp nhất của khách hàng do Zio tư vấn và tạo kiểu</p>
                </div>
            </div>
            <section class="row">
                @if(count($videos) > 0)
                <div class="col-md-6 zio-blog-video zio-blog-video-title">
                    <div class="blog-video mb-4">
                        {!! $videos->first()->description !!}
                    </div>
                    <h1>{{$videos->first()->title}}</h1>
                    <p>{{$videos->first()->summary}}</p>
                </div>
                @endif

                <div class="col-md-6">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-md-6 zio-blog-title zio-blog-title-da">
                            <a href="{{route('news_detail',['slug'=>$blog->slug])}}">
                                <img src="{{$blog->feather_image}}" class="img-responsive" />
                                <h1>{{$blog->title}}</h1>
                                <p>{{$blog->summary}}</p>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>
    </section>


    <section id="zio-stylis" class="zio-stylis">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-7  col-md-push-5">
                    <div class="row">
                        <div class="col-lg-12 text-left zio-title zio-stylis-title mb-5">
                            <h2 class="section-heading">STYLIST CỦA CHÚNG TÔI</h2>
                            <hr class="my-4">
                            <p>Những chuyên gia hàng đầu của chúng tôi với hơn 10 năm kinh nghiệm trong ngành tóc tại Việt Nam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-pull-7 p-0 ">
                    <div class="block-media">
                        <div class="carousel-images slider-nav">
                            <div>
                                <img src="{{asset('front_components/img/stylis-01.jpg')}}" class="img-responsive" alt="1">
                            </div>
                            <div>
                                <img src="{{asset('front_components/img/stylis-02.jpg')}}" class="img-responsive" alt="2">
                            </div>
                        </div>
                    </div>

                    <div class="block-text">
                        <div class="carousel-text slider-for">
                            <div class="zio-stylis-info">
                                <h1>STYLIST. DO MINH THANH</h1>
                                <p class="zio-stylis-position">CEO - Founder hệ thống ZIO HAIR</p>
                                <p>Vài câu gì đó giới thiệu về anh zai này cũng như các chủ của các salon khác để thấy được sự uy tín và tay nghề chuyên nghiệp. Điều này cũng thúc đẩy chủ các salon mong muốn đc trở thành thành viên của ZIO</p>
                            </div>
                            <div class="zio-stylis-info">
                                <h1>STYLIST. DO MINH THANH - 1</h1>
                                <p class="zio-stylis-position">CEO - Founder hệ thống ZIO HAIR</p>
                                <p>Vài câu gì đó giới thiệu về anh zai này cũng như các chủ của các salon khác để thấy được sự uy tín và tay nghề chuyên nghiệp. Điều này cũng thúc đẩy chủ các salon mong muốn đc trở thành thành viên của ZIO</p>
                            </div>
                        </div>
                    </div>


                </div> -->
                <div class="col-md-6">
                     <div class="block-media">
                        <div class="carousel-images"> <!--  slider-nav -->

                          <div>
                            <img src="{{asset('front_components/img/stylis-01.jpg')}}" class="img-responsive" alt="1">
                          </div>
                          <div>
                             <!-- <img src="{{asset('front_components/img/stylis-02.jpg')}}" class="img-responsive" alt="2"> -->
                          </div>
                        </div>
                      </div>

                      <div class="block-text">
                        <div class="carousel-text slider-for">
                          <div class="zio-stylis-info">
                            <h1>STYLIST. DO MINH THANH</h1>
                            <p class="zio-stylis-position">CEO - Founder hệ thống ZIO HAIR</p>
                            <p>Hair-stylist Đỗ Minh Thành tốt nghiệp khóa đào tạo TONI & GUY và đã từng tu nghiệp tại Thượng Hải trước khi trở về Hà Nội lập nên ZIO Hair vào tháng 4/2016. Với anh, tạo mẫu tóc là một nghề vừa mang nghệ thuật lại có tính phục vụ cao, đòi hỏi người thợ không những phải có kỹ năng tay nghề tốt mà còn phải giao tiếp và ứng xử khéo léo. Quan trọng hơn nữa chính là sự đam mê, sáng tạo, liên tục cập nhập những xu hướng không chỉ về lĩnh vực tóc mà còn cả thời trang và xu hướng, phong cách.</p>
                          </div>
                          <!-- <div class="zio-stylis-info">
                            <h1>STYLIST. DO MINH THANH - 1</h1>
                            <p class="zio-stylis-position">CEO - Founder hệ thống ZIO HAIR</p>
                            <p>2- Vài câu gì đó giới thiệu về anh zai này cũng như các chủ của các salon khác để thấy được sự uy tín và tay nghề chuyên nghiệp. Điều này cũng thúc đẩy chủ các salon mong muốn đc trở thành thành viên của ZIO</p>
                          </div> -->
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="zio-store">
                        <h1 class="title-zio-store text-uppercase text-white text-center">Danh sách cửa hàng</h1>
                        <div class="table-scroll">
                            <table class="store">
                                <tbody>
                                @foreach($salons as $salon)
                                    <tr>
                                        <td class="col1">{{$loop->iteration}}</td>
                                        <td class="col2">{{$salon->name}}</td>
                                        <td class="col3"><a href="tel:{{$salon->phone}}"><i class="fa fa-phone"></i> {{$salon->phone}}</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
        </div>
        
        
      </div>

    </div>
  </div>
</div> 

@endsection
@section('script')
<style>
    #myModal .modal-dialog {
      max-width: 800px;
      margin: 60px auto;
  }

#myModal .modal-body {
  position:relative;
  padding:0px;
}
#myModal .close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}




</style>
<script>
    $('.owl-carousel-tv').owlCarousel({
  loop: true,
  margin: 20,
  dots: true,
  nav: false,
  autoplay:true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2,
      margin: 20,
      stagePadding: 50,
    },
    1000: {
      items: 4
    }
  }
});
</script>
 <script>
     $(document ).ready(function() {
         $("#salon").select2({
             placeholder: 'Vui lòng chọn Salon',
             allowClear: true});
         $("#sex").select2({
             placeholder: 'Vui lòng chọn Giới Tính',
             allowClear: true});
         $("#service").select2({
             placeholder: 'Vui lòng chọn Dịch Vụ',
             allowClear: true});
        $(".js-scroll-trigger").removeClass('active');
        $("#ahome").addClass('active');


         $("#buttonStep1").on('click touchend', function() {
             /*
                  validate form.
              */
             console.log("salon : "+ $("#salon").val());
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
                 $("#textPrice").html($("#service :selected").data('price'));
                 $("#price").val($("#service :selected").data('price'));
                 $("#salon_id").val($("#salon :selected").val());
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
                             console.log('click td');
                             $(this).parent().parent()//add cell-selected class to a
                                 .find('td') //look at siblings
                                 .removeClass('booking-time-active'); //remove the class
                             $(this).addClass('booking-time-active');
                            // $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
                             var child =  $(this).find('.booking-red');
                             if(child.length > 0) {
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
             console.log('click button Back');
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
                         var child =  $(this).find('.booking-red');
                         if(child.length > 0) {

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
            // $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
             var child =  $(this).find('.booking-red');
             if(child.length > 0) {
                 $("#messError").html('');
                 $("#messError").html('Khung giờ này đã hết chỗ. Vui Lòng chọn lại');
                 $('#exampleModal-error').modal('show');
             } else {

                 $("#textTime").html($(this).html().replace(/(<([^>]+)>)/ig,""));
             }
         });
         $('#bookingForm').submit(function( e ) {
             console.log('booking Form start');
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
                 },
                 complete: function(data) {

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
    .modal-dialog{margin-top: 100px;}
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