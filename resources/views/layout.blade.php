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
                                <li><a href="{{('/login-checkout')}}"><i class="fa fa-user"></i> T??i Kho???n</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Y??u Th??ch </a></li>
                                <li><a href="{{('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n </a></li>
                                <li><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> Gi??? H??ng</a></li>

                                <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id =null){
                              ?>

                                <li><a href="{{('/logout-checkout')}}"><i class="fa fa-lock"></i> ????ng Xu???t </a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{('/login-checkout')}}"><i class="fa fa-lock"></i> ????ng Nh???p </a></li>
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
                                <li><a href="{{'/'}}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>

                                </li>
                                <li><a href="{{ route('cart.index') }}">Gi??? H??ng</a></li>
                                <li><a href="contact-us.html">Li??n h??? </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <label>
                                <input type="text" placeholder="T??m Ki???m"/>
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
                                    <h1><span>NGH??A</span></h1>
                                    <p> T??? h??o l?? th????ng hi???u g??p ph???n thay ?????i di???n m???o th???i trang Vi???t Nam tr??n ch???ng ???????ng ho?? m??nh c??ng d??ng ch???y th???i trang th??? gi???i.
                                    </p>
                                    <button type="button" class="btn btn-default get">Mua s???m Ngay b??y gi???</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/gucci.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Th???i Trang</span></h1>

                                    <p>Th???i trang ?????nh h??nh phong c??ch v?? n??i l??n ti???ng n??i b???n l?? ai, t??? ????u t???i, c?? t??nh nh?? th??? n??o.
                                        Tr??n th??? gi???i c?? r???t nhi???u phong c??ch th???i trang kh??c nhau,
                                        v?? th??? c?? nhi???u ti???ng n??i v?? quan ??i???m v??? th???i trang kh??c nhau. </p>
                                    <button type="button" class="btn btn-default get">Mua s???m Ngay b??y gi???</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/ysl.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Phong C??ch</span></h1>
                                    <p>???Th???i trang l?? m???t th??? ng??n ng???. M???t v??i ng?????i bi???t n??, m???t v??i ng?????i h???c n??,
                                        m???t v??i ng?????i s??? ch???ng bao gi??? c???n ph???i h???c hi???u v?? ???? l?? b???n n??ng???  </p>
                                    <button type="button" class="btn btn-default get">Mua s???m Ngay b??y gi???</button>
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
                        <h2>Danh M???c S???n ph???m </h2>
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
                            <h2>Th????ng Hi???u S???n ph???m </h2>
                            <div class="brands-name">
                                @foreach($brand as $key => $brand_product)
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{('/thuong-hieu-san-pham'.$brand_product->brand_id)}}"> <span class="pull-right"></span>{{$brand_product->brand_name}}</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </div><!--/brands_products-->

                      <div class="price-range"><!--price-range-->
                            <h2>M???c Gi??</h2>
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
                                                    <p>V??y</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Th??m gi??? H??ng</a>
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
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Th??m gi??? H??ng</a>
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
                                                    <p>V??y</p>

                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Th??m gi??? H??ng</a>
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
                            <p>lu??n c??? g???ng ????? ph??t tri???n v?? x??y d???ng v??n ho?? vintage chu???n ??? Vi???t Nam.</p>
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
                                <li><a href="">H??? tr??? online</a></li>
                                <li><a href="">Li??n H??? Ch??ng T??i</a></li>
                                <li><a href="">Tr???ng th??i </a></li>
                                <li><a href="">Thay ?????i ?????a ??i???m</a></li>
                                <li><a href="">FAQ???s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>C???a H??ng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Qu?? t???ng</a></li>
                                <li><a href="#">Gi??y</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Shop nh?? S??i</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??ng Tin C???a H??ng</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">?????a ??i???m C???a H??ng</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Li??n H???</h2>
                            <form action="#" class="searchform">
                                <label>
                                    <input type="text" placeholder="?????a Ch??? email c???a B???n" />
                                </label>
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>
                                    Cho shop xin s??? ????ng g??p ch??n th??nh nh???t t??? b???n nh??! <br />
                                    ????? ch??ng t??i c?? th??? c???i thi???n h??n.</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2013 E-SHOPPER Inc. All rights reserved.</p>
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
