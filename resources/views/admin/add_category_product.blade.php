@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
                </header>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{'/admin/save-category-product'}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <label for="category_name"></label><input name="category_name" type="text" class="form-control" id="category_name" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="category_description" id="exampleInputPassword1"
                                          placeholder="Mô Tả Danh Mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển Thị </label>
                                <label>
                                    <select name="category_status" class="form-control input-sm m-bot15">
                                        <option value="0"> Ẩn</option>
                                        <option value="1">Hiển Thị </option>

                                    </select>
                                </label>
                            </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh muc</button>
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
