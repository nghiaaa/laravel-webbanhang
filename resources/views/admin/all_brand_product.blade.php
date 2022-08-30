@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt Kê thương hiệu
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <label>
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Hành động</option>
                            <option value="1">Xóa mục chọn</option>
                            <option value="2">sửa</option>
                            <option value="3">xuất</option>
                        </select>
                    </label>
                    <button class="btn btn-sm btn-default">Áp dụng</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <label>
                            <input type="text" class="input-sm form-control" placeholder="Search">
                        </label>
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Đi--</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên thương hiệu</th>
                        <th>Hiển thị</th>
                        <th>Quản lý </th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_brand_product as $key => $cate_pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{$cate_pro->brand_name}}</td>
                            <td><span class="text-ellipsis">
                               <?php
                                    if($cate_pro->brand_status==0){
                                        echo'Ẩn';
                                    }
                                    else{
                                        echo 'Hiển thị';
                                    }
                                    ?>
                            </span></td>

                            <td>
                                <a href="{{URL::to('/admin/edit-brand-product',$cate_pro->brand_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active">sửa</i></a>
                                <a onclick= "return confirm('Bạn có chắc là muốn xóa danh mục này?')" href="{{URL::to('/admin/delete-brand-product',$cate_pro->brand_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text">xóa</i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm"> show 5 - 6 danh mục</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>

                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>


@endsection
