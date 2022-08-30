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


        <div class="register-req">
            <p>Đăng kí hoặc Đăng nhập để thanh toán giỏ hàng</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Thông tin Ship</p>
                        <div class="form-one">
                            <form action="{{('/save-checkout-customer')}}" method="post">
                                {{csrf_field()}}
                                <input type="text" name="shipping_email" placeholder="Email">
                                <input type="text" name="shipping_name" placeholder="Họ Và Tên">
                                <input type="text" name="shipping_address" placeholder="Địa Chỉ">
                                <input type="text" name="shipping_phone" placeholder="Phone">
                                <textarea name="shipping_notes" placeholder="Viết về các thông tin cần gửi, các yêu cầu " rows="16"></textarea>
                                <input type="submit" value="Gửi " name="send_order" class=" btn btn-primary btn-sm ">
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="review-payment">
            <h2></h2>
        </div>


    </div>
</section> <!--/#cart_items-->
@endsection
