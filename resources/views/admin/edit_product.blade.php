@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center">
                        @foreach($edit_product as $key => $pro)
                        <form role="form" action="{{'/admin/update-product/'.$pro->product_id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <label for="product_name"></label><input name="product_name" type="text" class="form-control" id="product_name" value="{{$pro->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                <label for="product_price"></label><input name="product_price" type="text" class="form-control" id="product_price" value="{{$pro->product_price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh </label>
                                <label for="product_image"></label><input name="product_image" type="file" class="form-control" id="product_image">
                                <img src="{{('/public/upload/product/'.$pro->product_image) }}" height="100px" width="100px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="product_description" id="exampleInputPassword1"
                                value="{{$pro->product_description}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="product_content" id="exampleInputPassword1"
                                          value="{{$pro->product_content}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Danh mục sản phẩm </label>
                                <label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            @if($cate->category_id==$pro->category_id)
                                            <option selected value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                                            @else
                                                <option value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thương hiệu sản phẩm </label>
                                <label>
                                    <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            @if($cate->category_id==$pro->category_id)
                                            <option value="{{$brand->brand_id}}"> {{$brand->brand_name}}</option>
                                            @else
                                                <option value="{{$brand->brand_id}}"> {{$brand->brand_name}}</option>
                                            @endif
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
                            <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                        </form>
                        @endforeach
                    </div>

                </div>

            </section>

        </div>
    </div>
@endsection
