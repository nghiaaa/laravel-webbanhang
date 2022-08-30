<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product()
    {
        return view('admin.add_category_product');
    }

    public function show_add_category_product()
    {

    }

    public function all_category_product()
    {
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    }

    public function save_category_product(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        //$data['category_status'] = $request->category_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return view('admin.add_category_product');
    }
    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);

        Session::put('message','Cập nhật danh mục thành công');
        return Redirect::to('admin/all-category-product');
    }
    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();

        Session::put('message','Xóa danh mục thành công');
        return Redirect::to('admin/all-category-product');
    }
    //end funcion page
  public function show_category_home($category_id){
      $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
      $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
      $Category_by_id = DB::table('tbl_product')
          ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
          ->where('tbl_product.category_id',$category_id)->get();
      $Category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)
          ->limit(1)->get();
      return view('category.show_category')->with('category',$cate_product)->with('brand',$brand_product)->with('Category_by_id',$Category_by_id)
          ->with('Category_name',$Category_name);
    }
}

