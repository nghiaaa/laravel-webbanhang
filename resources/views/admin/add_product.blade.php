@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm  sản phẩm
                </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">', $message,'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">


                    <div class="position-center">
                        <form role="form" action="{{'/admin/save-product'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <label for="product_name"></label><input name="product_name" type="text" class="form-control" id="product_name" placeholder="Tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <label for="product_price"></label><input name="product_price" type="text" class="form-control" id="product_price" placeholder="Giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="product_description" id="exampleInputPassword1"
                                          placeholder="Mô Tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="product_content" id="exampleInputPassword1"
                                          placeholder="Nội dung sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Danh mục sản phẩm </label>
                                <label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thương hiệu sản phẩm </label>
                                <label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}"> {{$brand->brand_name}}</option>
                                        @endforeach

                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển Thị </label>
                                <label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0"> Ẩn</option>
                                        <option value="1">Hiển Thị </option>

                                    </select>
                                </label>
                            </div>
                            <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                        </form>
                    </div>

                </div>

            </section>

        </div>
    </div>
@endsection
