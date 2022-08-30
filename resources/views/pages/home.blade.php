@extends('layout')
@section('content')
    <div class="features_items">
        <!--features_items-->

        <h2 class="title text-center">Sản phẩm mới nhất</h2>
        @foreach($all_product as $key => $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="/public/upload/product/{{ $product->product_image }}" alt="" />
                        <h2>{{number_format($product->product_price).''.'VNĐ'}}</h2>
                        <p>{{ $product->product_name }}</p>
                         <a href="{{ route('cart.add', $product->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
                </div>
            </div>


                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>thêm vào yêu thích</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>

    </div>

    @endforeach

    </div><!--features_items-->

@endsection('layout')
