<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Login
     *
     * @param Request $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            //view login
            if (Auth::check()) {
                return redirect()->route('admin.home');
            }
            return view('admin_login');
        } else {

            $validator = Validator::make($request->all(), [
                'email' => ['required', 'max:100', 'email', 'exists:users,email'],
                'password' => ['required', 'min:6', 'max:32']
            ], [
                'email.required' => 'Email la truong bat buoc.',
                'email.exists' => 'Email khong ton tai.',
                'password.required' => 'Mat khau la truong bat buoc.',
                'password.min' => 'Mat khau co toi thieu 6 ky tu.'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            } else {
                // get login info
                $login_info = [
                    'email' => $request['email'],
                    'password' => $request['password'],
                ];

                // Do login
                if (Auth::attempt($login_info)) {
                    return redirect()->route('admin.home');
                } else {
                    // Login fail
                    return redirect()->back()->withInput()->withErrors([
                        'password' => 'Mat khau khong dung'
                    ]);
                }
            }
        }
    }

    /**
     * Logout
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
