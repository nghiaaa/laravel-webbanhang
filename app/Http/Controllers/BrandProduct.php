<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{
    public function add_brand_product()
    {
        return view('admin.add_brand_product');
    }

    public function show_add_brand_product()
    {

    }

    public function all_brand_product()
    {
        $all_brand_product = DB::table('tbl_brand_product')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
    }

    public function save_brand_product(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        //$data['brand_status'] = $request->brand_status;

        DB::table('tbl_brand_product')->insert($data);
        Session::put('message', 'Thêm thương hiệu sản phẩm thành công');
        return view('admin.add_brand_product');
    }
    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product);
    }
    public function update_brand_product(Request $request,$brand_product_id){
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->update($data);

        Session::put('message','Cập nhật thương hiệu thành công');
        return Redirect::to('admin/all-brand-product');
    }
    public function delete_brand_product($brand_product_id){
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->delete();

        Session::put('message','Xóa thương hiệu thành công');
        return Redirect::to('admin/all-brand-product');
    }
    public function show_brand($brand_id){

    }
}
