<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_Dashboard()
    {

    }

    public function dashboard(request $request)
    {
        $admin_email = $request['admin_email'];
        $admin_password = md5($request['admin_password']);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        return view('admin.dashboard');
    }
}
