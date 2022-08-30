<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

session_start();

class CartController extends Controller
{
    /**
     * Show cart
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();

        return view('cart.show_cart')->with([
            'category' => $cate_product,
            'brand' => $brand_product,
        ]);
    }

    /**
     * Add product to card
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function add_cart(Request $request, $id)
    {
        $product = DB::table('tbl_product')->where('product_id', $id)->get()->first();
        if (!$product) {
            // Product not found
            abort(404);
        } else {
            if ($request->getMethod() == 'GET') {
                $this->saveCart($product, 1);
                return redirect()->route('cart.index');
            } else {
                $validator = Validator::make($request->all(), [
                    'quantity' => ['nullable', 'numeric', 'min:0', 'not_in:0'],
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                } else {
                    $quantity = $request['quantity'] ?? 1; // Get quantity or default is 1
                    $this->saveCart($product, $quantity);
                    return redirect()->route('cart.index');
                }
            }
        }
    }

    /**
     * Save cart
     *
     * @param $product
     * @param $quantity
     */
    protected function saveCart($product, $quantity)
    {
        $data = [
            'id' => $product->product_id,
            'qty' => $quantity,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'weight' => '123',
            'options' => [
                'image' => $product->product_image
            ]
        ];
        Cart::add($data);
    }

    public function save_cart(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            // GET method
            $productIid = $request->productid_hiden;
            $productInfo = DB::table('tbl_product')->get();
            dd($productInfo);
        } else {
            // Post method
            $productIid = $request->productid_hiden;
            $quanlity = $request->qty;
            $productInfo = DB::table('tbl_product')->where('product_id', $productIid)->first();
            dd($productInfo);

            //Cart::add();
            if (isset($productInfo)) {
                $data['id'] = $productIid;
                $data['qty'] = $quanlity;
                $data['name'] = $productInfo->product_name;
                $data['price'] = $productInfo->product_price;
                $data['weight'] = '123';
                $dat['options->image'] = $productInfo->product_image;
                Cart::add($data);
            }

            return Redirect::to('/show-cart');
        }
    }

    public function show_cart()
    {

        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
         Cart::destroy();
        return view('cart.show_cart')->with('category', $cate_product)->with('brand', $brand_product);
    }



}
