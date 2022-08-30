@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{'/'}}">Trang Chủ</a></li>
                    <li class="active">Giỏ Hàng Của Bạn</li>
                </ol>
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
                                    <img src="{{('/public/upload/product/'.$v_content->options->image) }}" width="100" alt=""/>
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

                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li> Tổng <span>{{ number_format($v_content->price)}} VNĐ</span></li>
                            <li>Thuế <span>10 Xu</span></li>
                            <li>Phí Vận Chuyển <span>100000000 VNĐ</span></li>
                            <li>Thành Tiền <span>{{ number_format($v_content->price)}} VNĐ</span></li>
                        </ul>
                        <a class="btn btn-default check_out" href="{{('/login-checkout')}}"> Thanh Toán</a>
                    </div>
            </div>
            </div>
        </div>
    </section> <!--/#cart_items-->
@endsection
