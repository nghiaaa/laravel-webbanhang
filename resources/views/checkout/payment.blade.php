@extends('layout')
@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{'/'}}">Trang Chủ</a></li>
                    <li class="active">Thanh toán Giỏ Hàng Của Bạn</li>
                </ol>
            </div>


            <div class="review-payment">
                <h2>Xem lại giỏ hàng</h2>
            </div>
            <div class="table-responsive cart_info">

                @php $content = Cart::content() @endphp

                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh Sản Phẩm</td>
                        <td class="name">Tên Phẩm</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số Lượng</td>
                        <td class="total">Tổng</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($content as $v_content)
                        <tr>
                            <td class="image">
                                <a href="">
                                    <img src="{{('/public/upload/product/'.$v_content->options->image) }}" width="100"
                                         alt=""/>
                                </a>
                            </td>
                            <td class="cart_description ">
                                <h4><a href="">{{ $v_content->name }}</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($v_content->price)}} VNĐ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                           autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{ number_format($v_content->price)}} VNĐ</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
            <form method="post" action="{{('/order-place')}}">
                {{csrf_field()}}
            <div class="payment-options">
                <span>
                    <label>	<input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Thanh toán khi nhận hàng</label>
                </span>
                <input type="submit" value="Đặt Hàng" name="send_order" class="btn btn-primary btn-sm ">

            </div>
            </form>
            <a href="{{ route('checkout.vnpay.create') }}" class="btn btn-success btn-sm">Thanh toán VNPay</a>
        </div>
    </section> <!--/#cart_items-->
@endsection
