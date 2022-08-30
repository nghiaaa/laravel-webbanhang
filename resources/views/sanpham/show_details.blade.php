@extends('layout')
@section('content')
    @foreach($product_details as $key => $value)
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{('/public/upload/product/'.$value->product_image)}}" alt=""/>
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href=""><img src="{{('/public/frontend/images/similar1.jpg')}}" alt=""></a>
                            <a href=""><img src="{{('/public/frontend/images/similar2.jpg')}}" alt=""></a>
                            <a href=""><img src="{{('/public/frontend/images/similar3.jpg')}}" alt=""></a>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt=""/>
                    <h2>{{$value->product_name}}</h2>
                    <p>Sản phẩm: {{ $value->product_id }}</p>
                    <img src="images/product-details/rating.png" alt=""/>

                    <form action="{{ route('cart.add', $value->product_id) }}" method="POST">
                        @csrf
                        <span>
                            <span>{{ number_format($value->product_price) }} VNĐ</span>
                            <label>Số Lượng:</label>
                            <input name="quantity" type="number" min="1" value="1"/>
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm Giỏ Hàng
                            </button>
                        </span>
                    </form>
                    <p><b>Tình Trạng:</b> Còn Hàng</p>
                    <p><b>Điều Kiện:</b> Hàng Mới</p>
                    <p><b>Brand:</b> {{$value->brand_name}}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""/></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->
    @endforeach

    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#a" data-toggle="tab">Chi tiết</a></li>
                <li><a href="#b" data-toggle="tab">Mô Tả</a></li>
                <li><a href="#c" data-toggle="tab">Giới thiệu Sản phẩm</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in " id="details">

                <p>{{$value->product_content}}</p>
            </div>


            <div class="tab-pane fade" id="tag">


                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery4.jpg" alt=""/>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <button type="button" class="btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade active in " id="reviews">
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>nghia</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>7/12/2021</a></li>
                    </ul>
                    <p></p>
                    <p><b>Cảm nhận</b></p>

                    <form action="#">
										<span>
											<input type="text" placeholder="Họ Và Tên"/>
											<input type="email" placeholder="Địa chỉ"/>
										</span>
                        <textarea name=""></textarea>
                        <b> </b> <img src="{{('/public/frontend/images/rating.png')}}" alt=""/>
                        <button type="button" class="btn btn-default pull-right">
                            Gửi
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div><!--/category-tab-->

    {{-- <div class="recommended_items"><!--recommended_items-->
         <h2 class="title text-center">recommended items</h2>

         <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                 <div class="item active">
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend1.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend2.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend3.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend1.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend2.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <div class="product-image-wrapper">
                             <div class="single-products">
                                 <div class="productinfo text-center">
                                     <img src="images/home/recommend3.jpg" alt="" />
                                     <h2>$56</h2>
                                     <p>Easy Polo Black Edition</p>
                                     <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
             </a>
             <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                 <i class="fa fa-angle-right"></i>
             </a>
         </div>
     </div> --}}<!--/recommended_items-->
@endsection
