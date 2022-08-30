<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\requests;
use Illuminate\Support\Facades\Redirect;

class homecontroller extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        // $all_product = DB::table('tbl_product')
            //->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
           // ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
           // ->orderBy('tbl_product.product_id', 'desc')->get();
        $all_product = DB::table('tbl_product')->orderby('product_id', 'desc')->limit(6)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
}
