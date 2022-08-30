<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Nghia</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('public/frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontend/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 08999999999</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> nghiaa.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href=""><img src="{{('public/frontend/images/dien-luc.jpg')}}" width="125" height="110" alt="" /></a>
                        </div>



                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{('/login-checkout')}}"><i class="fa fa-user"></i> Tài Khoản</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Yêu Thích </a></li>
                                <li><a href="{{('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán </a></li>
                                <li><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>

                                <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id =null){
                              ?>

                                <li><a href="{{('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng Xuất </a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng Nhập </a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{'/'}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>

                                </li>
                                <li><a href="{{ route('cart.index') }}">Giỏ Hàng</a></li>
                                <li><a href="contact-us.html">Liên hệ </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <label>
                                <input type="text" placeholder="Tìm Kiếm"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>NGHĨA</span></h1>
                                    <p> Tự hào là thương hiệu góp phần thay đổi diện mạo thời trang Việt Nam trên chặng đường hoà mình cùng dòng chảy thời trang thế giới.
                                    </p>
                                    <button type="button" class="btn btn-default get">Mua sắm Ngay bây giờ</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/gucci.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Thời Trang</span></h1>

                                    <p>Thời trang định hình phong cách và nói lên tiếng nói bạn là ai, từ đâu tới, cá tính như thế nào.
                                        Trên thế giới có rất nhiều phong cách thời trang khác nhau,
                                        vì thế có nhiều tiếng nói và quan điểm về thời trang khác nhau. </p>
                                    <button type="button" class="btn btn-default get">Mua sắm Ngay bây giờ</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/ysl.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Phong Cách</span></h1>
                                    <p>“Thời trang là một thứ ngôn ngữ. Một vài người biết nó, một vài người học nó,
                                        một vài người sẽ chẳng bao giờ cần phải học hiểu vì đó là bản năng”  </p>
                                    <button type="button" class="btn btn-default get">Mua sắm Ngay bây giờ</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/fas.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh Mục Sản phẩm </h2>
                        <div class="panel-group category-products" id="accordian"><!--category-products-->
                    @foreach($category as $key => $cate)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{('/danh-muc-san-pham'.$cate->category_id)}}"> {{$cate->category_name}} </a></h4>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương Hiệu Sản phẩm </h2>
                            <div class="brands-name">
                                @foreach($brand as $key => $brand_product)
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{('/thuong-hieu-san-pham'.$brand_product->brand_id)}}"> <span class="pull-right"></span>{{$brand_product->brand_name}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div><!--/brands_products-->

                      <div class="price-range"><!--price-range-->
                            <h2>Mức Giá</h2>
                            <div class="well text-center">
                                <label for="sl2"></label><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">VND 0</b> <b class="pull-right">VND 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{('public/frontend/images/shipping.jpg')}}" alt="" />
                        </div><!--/shipping-->

                </div>

                <div class="col-sm-9 padding-right">
                         @yield('content')

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Fashion</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/vayy1.jpg')}}" alt="" />
                                                    <h2> Cute</h2>
                                                    <p>Váy</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ Hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/vayy2.jpg')}}" alt="" />
                                                    <h2> Cute</h2>
                                                    <p>Lady</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ Hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{('public/frontend/images/vayy3.jpg')}}" alt="" />
                                                    <h2> Fresh</h2>
                                                    <p>Váy</p>

                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ Hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">


                                </div>
                            </div>

                        </div>
                    </div><!--/recommended_items-->

                </div>
                </div>
            </div>
    </section>

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Nghia</span></h2>
                            <p>luôn cố gắng để phát triển và xây dựng văn hoá vintage chuẩn ở Việt Nam.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe2.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{('public/frontend/images/map.png')}}" alt="" />
                            <p>+84 Viet Nam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ online</a></li>
                                <li><a href="">Liên Hệ Chúng Tôi</a></li>
                                <li><a href="">Trạng thái </a></li>
                                <li><a href="">Thay Đổi Địa Điểm</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Cửa Hàng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Quà tặng</a></li>
                                <li><a href="#">Giày</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Shop nhà Sói</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông Tin Cửa Hàng</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Địa Điểm Cửa Hàng</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Liên Hệ</h2>
                            <form action="#" class="searchform">
                                <label>
                                    <input type="text" placeholder="Địa Chỉ email của Bạn" />
                                </label>
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>
                                    Cho shop xin sự đóng góp chân thành nhất từ bạn nhé! <br />
                                    Để chúng tôi có thể cải thiện hơn.</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->



    <script src="{{('public/frontend/js/jquery.js')}}"></script>
    <script src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{('public/frontend/js/price-range.js')}}"></script>
    <script src="{{('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{('public/frontend/js/main.js')}}"></script>
    <script src="{{('public/frontend/js/sweetalert.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){

});
</script>

</body>
</html>
