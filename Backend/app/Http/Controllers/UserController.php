<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Hiển thị trang dashboard của user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user.dashboard');
    }

    /**
     * Phương thức để hiển thị thông tin tài khoản người dùng.
     *
     * @return \Illuminate\View\View
     */
    public function showProfile()
    {
        return view('user.profile');
    }

}
