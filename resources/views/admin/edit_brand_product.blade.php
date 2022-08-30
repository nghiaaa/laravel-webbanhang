@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật THƯƠNG HIỆU  sản phẩm
                </header>
                <div class="panel-body">
                    @foreach($edit_brand_product as $key => $edit_value)
                        <div class="position-center">
                            <form role="form" action="{{('/admin/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên THƯƠNG HIỆU </label>
                                    <label for="brand_name"></label>
                                    <input name="brand_name" type="text" value="{{$edit_value -> brand_name}}" class="form-control" id="brand_name" placeholder="Tên THƯƠNG HIỆU ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả THƯƠNG HIỆU </label>
                                    <textarea style="resize: none" rows="5" class="form-control" name="brand_description" id="exampleInputPassword1"
                                    > {{$edit_value -> brand_description}}</textarea>
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
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật THƯƠNG HIỆU </button>
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
