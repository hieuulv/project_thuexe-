@extends('front-end.layouts.app_front-end')

@section('content')
    <!-- CONTENT AREA -->
    <!--Header Content End-->
    <style>
        .swiper-container {
            width: 100%;
            height: 480px;
            overflow: hidden;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .tj-cab-collection {
            float: left;
            width: 100%;
            padding: 28rem 0 80px;
        }
        .form-book{
            display: block;
            height: 45px;
            padding: 0 15px;
            width: 280px;
            color: #a6a6a6;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #e8e8e8;
            background-color: #f6f6f6;
            font-weight: 400;
        }
    </style>
    {{--    <div class="boxs-form" style="position: relative;margin-top: 17.5rem;">--}}
    {{--        <div class="swiper-container">--}}
    {{--            <div class="swiper-wrapper">--}}
    {{--                <div class="swiper-slide" style="margin-right: 0 !important;">--}}
    {{--                    <div class="toogle-title">--}}
    {{--                       <div class="title-slider">--}}
    {{--                           <p>Prime Cab đồng hành cùng bạn</p>--}}
    {{--                       </div>--}}
    {{--                        <div class="more_slider">--}}
    {{--                            <span><a href="#">Xem thêm</a></span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <img width="100%" src="{{ asset('front-end-css/images/banner2.webp') }}">--}}
    {{--                </div>--}}
    {{--                <div class="swiper-slide">--}}
    {{--                    <div class="toogle-title">--}}
    {{--                        <div class="title-slider animated bouncelnLeft" style="animation-delay: .3s">--}}
    {{--                            <p>Đa dạng về xe và dịch vụ</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="more_slider">--}}
    {{--                            <span><a href="#">Xem thêm</a></span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <img width="100%" src="{{ asset('front-end-css/images/banner3.webp') }}">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- Add Pagination -->--}}
    {{--            <div class="swiper-pagination"></div>--}}
    {{--            <!-- Add Arrows -->--}}
    {{--            <div class="swiper-button-next "></div>--}}
    {{--            <div class="swiper-button-prev"></div>--}}
    {{--            <!-- -->--}}
    {{--        </div>--}}
    {{--    --}}{{-- form-book-car    --}}
    {{--    <div class="col-md-10 col-md-offset-1 search-car">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-12 col-sm-5" style="">--}}
    {{--                <div class="trip-outer form-car">--}}
    {{--                    <div class="trip-type-tabs">--}}
    {{--                        <ul class="nav nav-tabs" style="width: 95.4%;text-align: center">--}}
    {{--                            <li class="active" style="width: 100%" ><a href="#one-way" data-toggle="tab">One Way</a></li>--}}
    {{--                            <li><a href="#two-way" data-toggle="tab">Two Way</a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                    <!--Banner Tab Content Start-->--}}
    {{--                    <div class="tab-content">--}}
    {{--                        <div class="tab-pane active" id="one-way">--}}
    {{--                            <!--Banner Form Content Start-->--}}
    {{--                            <form method="POST" action="{{ route('search_car') }}" class="trip-type-frm" role="search">--}}
    {{--                               @csrf--}}
    {{--                                <div class="form-row">--}}
    {{--                                    <div class="field-outer col">--}}
    {{--                                        <span class="fas fa-search"></span>--}}
    {{--                                        <select name="model_id" class="form-control " style="margin-bottom: 10px" id="">--}}
    {{--                                            <option  value="0" selected disabled>--Chọn hãng xe --</option>--}}
    {{--                                            @foreach($model_car as $model_id)--}}
    {{--                                                <option value="{{ $model_id->id }}">{{ $model_id->name }}</option>--}}
    {{--                                            @endforeach--}}
    {{--                                        </select>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="form-row">--}}
    {{--                                    <div class="field-outer">--}}
    {{--                                        <span class="fas fa-calendar-alt"></span>--}}
{{--                                            <select name="city_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_city">--}}
{{--                                                <option value="">--Chọn thành phố--</option>--}}
{{--                                                @foreach($city as $key => $id)--}}
{{--                                                        <option id="distri" value="{{ $id->id }}" >{{ $id->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="field-outer">--}}
    {{--                                        <span class="far fa-clock"></span>--}}
    {{--                                        <select name="district_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_district">--}}
    {{--                                            <option value="">--Chọn quận huyện --</option>--}}

    {{--                                        </select>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <button type="submit" class="search-btn">Tìm Xe <i--}}
    {{--                                        class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
    {{--                            </form>--}}
    {{--                            <!--Banner Form Content End-->--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!--Banner Tab Content End-->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!--Header Banner Form Content End-->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    </div>--}}
    <section class="tj-banner-form">
        <div class="container">
            <div class="row">
                <!--Header Banner Caption Content Start-->
                <div class="col-md-8 col-sm-7">
                    <div class="banner-caption">
                        <div class="banner-inner bounceInLeft animated delay-2s">
                            <strong>More recently with desktop publishing software ncluding versions</strong>
                            <h2>Upto 25% off on first booking through your app</h2>
                            <div class="banner-btns">
                                <a href="https://themesjungle.net/html/prime-cab/faq.html" class="btn-style-1"><i
                                        class="fab fa-apple"></i> Download App</a>
                                <a href="https://themesjungle.net/html/prime-cab/faq.html" class="btn-style-2"><i
                                        class="fab fa-android"></i> Download App</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Header Banner Caption Content End-->
                <!--Header Banner Form Content Start-->
                <div class="col-md-4 col-sm-5">
                    <div class="trip-outer">
                        <div class="trip-type-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active text-center" style="width:100%"><a href="#one-way" data-toggle="tab">Bạn cần thuê xe </a></li>
                                {{--                                <li><a href="#two-way" data-toggle="tab">Two Way</a></li>--}}
                            </ul>
                        </div>
                        <!--Banner Tab Content Start-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="one-way">
                                <!--Banner Form Content Start-->
                                <form method="POST" action="{{ route('search_car') }}" class="trip-type-frm"
                                      role="search">
                                    @csrf
                                    <div class="field-outer">
                                        <select name="model_id" class="form-control form-book" style="margin-bottom: 10px" id="">
                                            <option value="0" selected disabled>--Chọn hãng xe --</option>
                                            @foreach($model_car as $model_id)
                                                <option value="{{ $model_id->id }}">{{ $model_id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <select name="city_id" class="form-control pb-2 form-book" style="margin-bottom: 10px" id="select_city">
                                            <option value="">--Chọn thành phố--</option>
                                            @foreach($city as $key => $id)
                                                <option id="distri" value="{{ $id->id }}" >{{ $id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="fas fa-calendar-alt"></span>
                                        <input type="text" name="pick_date" placeholder="Ngày nhận xe ">
                                    </div>
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <input type="text" name="pick_date" placeholder="Ngày trả xe ">
                                    </div>
                                    <div class="field-outer">
                                        <input type="checkbox" name="promo_code" id="promo_code">
                                        <label for="promo_code">I Have Promotional Code</label>
                                    </div>
                                    <button type="submit" class="search-btn">Search Cabs <i
                                            class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                </form>
                                <!--Banner Form Content End-->
                            </div>
                        </div>
                        <!--Banner Tab Content End-->
                    </div>
                </div>
                <!--Header Banner Form Content End-->
            </div>
        </div>
    </section>
    {{-- end--}}
    <!--Welcome Section Content End-->
    <section class="tj-cab-collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Xe Nổi Bật</h3>
                        <h4>Những mẫu xe đang được ưa chuộng nhất năm nay</h4>
                    </div>
                </div>
                <div class="cab-col-outer">
                    <!--Fleet Grid Box Start-->
                    @foreach($car as $key => $id)
                        <div class="col-md-6 col-sm-6">
                            <div class="fleet-grid-box">
                                <!--Fleet Grid Thumb Start-->
                                <a href="{{ route('detail', $id->id) }}">
                                    <figure class="fleet-thumb">
                                        <img src="{{ asset('image_upload/img_vehicle/'.$id->image )}}" height="313"
                                             alt="">

                                        <figcaption class="fleet-caption">
                                            <div class="price-box">
                                                <strong>{{ $id->price }} <span>/ day</span></strong>
                                            </div>
                                            <span class="rated">Nổi bật</span>
                                        </figcaption>
                                    </figure>
                                </a>
                                <!--Fleet Grid Thumb End-->
                                <!--Fleet Grid Text Start-->
                                <div class="fleet-info-box">
                                    <div class="fleet-info">
                                        <h3 data-toggle="tooltip" title="2017 Chevrolet Pepe">{{ $id->name }}</h3>

                                        <ul class="fleet-meta">
                                            <li><i class="fas fa-taxi"></i>{{ $id['modelVehicles']['name'] }}</li>
                                            <li><i class="fas fa-user-circle"></i>{{ $id->seat }} chỗ</li>
                                            <li><i class="fas fa-tachometer-alt"></i>
                                                <span>{{ $id['user']['name'] }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('detail', $id->id) }}" class="tj-btn2">Xem chi tiết <i
                                            class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @break($key==3)
                @endforeach
                <!--Fleet Grid Box End-->
                </div>
            </div>
        </div>
    </section>
    <!-- comment service-->
    <section class="tj-promo-offer" style="background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="promo-box">
                        <div class="offer">
                            <h3 id="">Lợi ich của khách hàng đặt lên hàng đầu</h3>
                        </div>
                        <div class="reEmail" style="animation-delay: .3s">
                            <h3 id="">Lợi ich của khách hàng đặt xe đặt lên hàng đầu</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cab Services Section Start-->
    <section class="tj-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Lợi ích </h3>
                    </div>
                    <!--Service Outer Start-->
                    <div class="tj-service-outer">
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon1.png') }}" alt="">
                            <div class="service-info-box">
                                <h4>Nhiều lựa chọn</h4>
                                <p>Nhiều loại xe đa dạng ở nhiều địa điểm trên cả nước, phù hợp với mọi mục đích của
                                    bạn.</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon2.png')}}" alt="">
                            <div class="service-info-box">
                                <h4>Đặt Xe </h4>
                                <p>Nhiều loại xe đa dạng ở nhiều địa điểm trên cả nước, phù hợp với mọi mục đích của
                                    bạn</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon3.png')}}" alt="">
                            <div class="service-info-box">
                                <h4>Tin Cậy</h4>
                                <p>Các xe đều có thời gian sử dụng và được bảo dưỡng thường xuyên</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <!--Service Item End-->
                    </div>
                    <!--Service Outer End-->
                </div>
                <!--Service Ad Box Section Start-->
            </div>
        </div>
    </section>
    <!--Cab Services Section End-->
    <section class="tj-news" style="padding:0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Tin nổi bật</h3>
                        <p>Chúng tôi đem đến cho bạn những thông tin mới nhất về xe.<br> Cập nhật tin tức 24/7 những vấn
                            đề nóng hổi</p>
                    </div>
                </div>
                <!--Newsbox Content Start-->
                @foreach($show_news as $key => $news_id)@unset($show_news[$key])

                <div class="col-md-4 col-sm-6">
                    <div class="news-box">
                        <!--Newsbox Thumb Start-->
                        <a href="{{ route('detail_news',$news_id->id) }}">
                            <figure>
                                <img src="{{    asset('image_upload/post/'.$news_id->image_posts)}}" height="245"
                                     width="360" alt=""/>
                            </figure>
                        </a>
                        <!--Newsbox Thumb End-->
                        <!--News Detail Content Start-->
                        <div class="news-detail">
                            <a href="{{ route('detail_news',$news_id->id) }}">
                                <h4>{{ $news_id->title }}</h4>
                            </a>
                            <p>{{ $news_id->summary }}</p>
                            {{--                            <ul>--}}
                            {{--                                <li><i class="far fa-clock"></i> Sep 19, 2018</li>--}}
                            {{--                                <li><i class="far fa-comments"></i> 29</li>--}}
                            {{--                            </ul>--}}
                        </div>
                        <!--News Detail Content End-->
                    </div>
                </div>
            @break($key==1)
            @endforeach
            <!--News List Content Start-->
                <div class="col-md-4 col-sm-12">
                    <div class="news-list">
                        <!--News Outer Content Start-->
                        <ul class="news-outer">
                            @foreach($show_news as $key => $id_news)
                                <li>
                                    <a href="{{ route('detail_news',$id_news->id) }}">
                                        <figure>
                                            <img src="{{    asset('image_upload/post/'.$id_news->image_posts)}}"
                                                 height="90" width="90" alt=""/>
                                        </figure>
                                    </a>
                                    <div class="news-info">
                                        <a href="{{ route('detail_news',$id_news->id) }}">
                                            <h4>{{ $id_news->title }}</h4>
                                            <a href="{{ route('detail_news',$id_news->id) }}">
                                        {{--                                    <ul class="news-meta">--}}
                                        {{--                                        <li><i class="far fa-clock"></i> Sep 19, 2018</li>--}}
                                        {{--                                        <li><i class="far fa-comments"></i> 29</li>--}}
                                        {{--                                    </ul>--}}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!--News Outer Content End-->
                    </div>
                </div>
                <!--News List Content End-->

            </div>
        </div>
    </section>
    <!--News Content End-->
    <!--Footer Copyright End-->
    <!-- /CONTENT AREA -->
    <script src="{{asset('package/js/swiper.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <a href="javascript:;" class="back-top" id="back-to-top" title="Back to top"><i class="fas fa-arrow-circle-up"></i></a>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            speed: 3000,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#select_city").change(function () {
                var city_id = $(this).val();
                console.log(city_id);
                if (city_id) {
                    $.ajax({
                        type: "get",
                        url: 'state/' + city_id,
                        dataType: "json",
                        success: function (res) {
                            if (res) {
                                $('#select_district').empty();
                                $.each(res, function (key, value) {
                                    $("#select_district").append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        }
                    });
                }
            });
        });

    </script>


@endsection
