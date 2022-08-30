@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục sản phẩm
                </header>
                <div class="panel-body">
                  @foreach($edit_category_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{('/admin/update-category-product/'.$edit_value->category_id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <label for="category_name"></label>
                                <input name="category_name" type="text" value="{{$edit_value -> category_name}}" class="form-control" id="category_name" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="5" class="form-control" name="category_description" id="exampleInputPassword1"
                                > {{$edit_value -> category_description}}</textarea>
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
                            <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh muc</button>
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
        @endforeach
    </div>
@endsection
