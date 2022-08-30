<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\requests;
use Cart;
session_start();

class CheckoutController extends Controller
{
    protected $vnp_TmnCode;
    protected $vnp_HashSecret;

    public function __construct()
    {
        $this->vnp_TmnCode = config('vnpay.code');
        $this->vnp_HashSecret = config('vnpay.secret');
    }

   public function view_order($customer_id){
$order_s = DB::table('tbl_order')
    ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
    ->select('tbl_order.*','tbl_shipping.*' )->first();
       $order_by_id = DB::table('tbl_order')
           ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
          ->select('tbl_order.*','tbl_customer.*' )->first();
       $order_d = DB::table('tbl_order')
           ->join('tbl_order_details', 'tbl_order.order_id', '=', 'tbl_order_details.order_id')
           ->select('tbl_order.*','tbl_order_details.*' )->first();


       $manager_order_by_id = view('admin.view_order')->with('order_by_id',$order_by_id)
           ->with('order_s',$order_s)->with('order_d',$order_d);
      return view('admin_layout')->with('admin.view_order',$manager_order_by_id);
   }

    public function login_checkout()
    {
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        return view('checkout.login_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function add_customer(Request $request)
    {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = $request->customer_password;
        $data['customer_phone'] = $request->customer_phone;
        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        session::put('customer_id', $customer_id);
        session::put('customer_name', $request->customer_name);
        return Redirect::to('/checkout');
    }

    public function checkout()
    {
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        return view('checkout.show_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_notes'] = $request->shipping_notes;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment');
    }

    public function payment()
    {
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        return view('checkout.payment')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function order_place(Request $request){
        //them payment method
        $data = array();
        $data['payment_method'] = '1';
        $data['payment_status'] = 'Đang Chờ Xử Lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

// them order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_status'] = 'Đang Chờ Xử Lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);
// order details
        $content = Cart::content();
        foreach($content as $v_content) {
            $order_d_data = array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price ;
            DB::table('tbl_order_details')->insertGetId($order_d_data);
        }
        Cart::destroy();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id', 'desc')->get();
        return view('checkout.handcash')->with('category', $cate_product)->with('brand', $brand_product);
    }

    public function logout_checkout()
    {
        Session::flush();
        return Redirect::to('/login-checkout');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('tbl_customer')->where('customer_email', $email)->where('customer_password', $password)->first();
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/checkout');
        } else {
            return Redirect::to('/login-checkout');
        }


    }

    public function manage_order()
    {
        $all_order = DB::table('tbl_order')
            ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
           ->select('tbl_order.*', 'tbl_customer.*')
            ->orderBy('tbl_order.order_id', 'desc')->get();
        $manager_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order',  $manager_order);
    }

    /**
     * Create new payment
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function createVNPay(Request $request)
    {
        $vnp_Url = config('vnpay.url');
        $vnp_Returnurl = config('vnpay.callback');
        $vnp_TmnCode = $this->vnp_TmnCode;
        $vnp_HashSecret = $this->vnp_HashSecret;

        $vnp_OrderInfo = 'Thanh toan don hang - ' . Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s'); // nội dung thanh toán

        $total = 10000; // Tổng thanh toán - tổng tiền

        $inputData = [
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $total * 100, // Tổng tiền
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => request()->ip(),
            "vnp_Locale" => 'vn',
            "vnp_OrderInfo" => $vnp_OrderInfo, // nội dung thanh toán
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => 'ORDER' . str_pad(rand(0, pow(10, 5) - 1), 5, '0', STR_PAD_LEFT), // Mã đơn hang để đối chiếu với vnpay
        ];

        // Cấu hình thanh toán mặc định cho 1 ngân hàng
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query; // Đường dẫn thanh toán
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect()->to($vnp_Url);
    }

    public function callbackVNPay(Request $request)
    {
        dd($request->all());
    }
}
