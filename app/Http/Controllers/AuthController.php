<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Register admin
     *
     * @param Request $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function register(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            if (auth()->check()) {
                // Check logged
                return redirect()->route('admin.home');
            }
            // Call view register if not logged
            return view('admin.register');
        } else {
            // custom validate rule and message data input
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'max:100', 'email', 'unique:users,email'],
                'password' => ['required', 'min:6', 'max:32'],
                'name' => ['required', 'max:191'],
            ], [
                'name.required' => 'Ten la truong bat buoc.',
                'name.min' => 'Ten co toi da 191 ky tu.',
                'email.required' => 'Email la truong bat buoc.',
                'email.unique' => 'Email khong ton tai.',
                'password.required' => 'Mat khau la truong bat buoc.',
                'password.min' => 'Mat khau co toi thieu 6 ky tu.',
            ]);

            if ($validator->fails()) {
                // Invalid data
                return redirect()->back()->withInput()->withErrors($validator);
            } else {
                // Create new user
                $user = User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password'])
                ]);

                if ($user) {
                    // Register success
                    return redirect()->route('admin.login')
                        ->with('success', 'Đăng Kí thành công');
                } else {
                    // Register fail
                    return redirect()->route('admin.register')
                        ->withInput()
                        ->with('error', 'Đăng Kí that bai');
                }
            }
        }
    }
}
