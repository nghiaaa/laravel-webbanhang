@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{'/admin/save-brand-product'}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <label for="brand_name"></label><input name="brand_name" type="text" class="form-control" id="brand_name" placeholder="Tên thương hiệu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="brand_description" id="exampleInputPassword1"
                                          placeholder="Mô Tả thương hiệu"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển Thị </label>
                                <label>
                                    <select name="brand_status" class="form-control input-sm m-bot15">
                                        <option value="0"> Ẩn</option>
                                        <option value="1">Hiển Thị </option>

                                    </select>
                                </label>
                            </div>
                            <button type="submit" name="add_brand_product" class="btn btn-info">Thêm thương hiệu</button>
                        </form>
                    </div>

                </div>

            </section>
            <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">', $message,'</span>';
                Session::put('message',null);
            }
            ?>
        </div>
    </div>
@endsection
