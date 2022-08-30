@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông Tin Khách Hàng
            </div>

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên  Khách Hàng</th>
                        <th>Số Điện Thoại</th>
                        <th>Email</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>{{$order_by_id->customer_name}}</td>
                            <td>{{$order_by_id->customer_phone}}</td>
                            <td>{{$order_by_id->customer_email}}</td>

                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
<br> <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông Tin Vận Chuyển
            </div>

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên Người Nhận</th>
                        <th>Địa Chỉ</th>
                        <th>Ghi Chú về Ship</th>
                        <th>Số Điện Thoại</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

                        <td>{{$order_s->shipping_name}}</td>
                        <td>{{$order_s->shipping_address}}</td>
                        <td>{{$order_s->shipping_notes}}</td>
                        <td>{{$order_s->shipping_phone}}</td>


                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết Đơn Hàng
            </div>

            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Tổng Tiền</th>
                        <th>Tình Trạng</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

                        <td>{{$order_d->product_name}}</td>
                        <td>1</td>
                        <td>{{$order_d->product_price}}</td>
                        <td>{{$order_d->product_price}}</td>
                        <th>{{$order_d->order_status}}</th>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
