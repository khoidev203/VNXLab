<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
        ]);

        $avatarPath = $request->file('avatar') ? $request->file('avatar')->store('avatars') : null;

        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'avatar' => $avatarPath,
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        // Kiểm tra nếu đăng nhập thành công
        if (Auth::attempt($request->only('email', 'password'))) {
            // Lấy thông tin người dùng đã đăng nhập
            $user = Auth::user();
            
            // Kiểm tra nếu người dùng là admin
            if ($user->role === 'admin') {
                return redirect()->route('home.index');  // Chuyển hướng đến trang home của admin
            } else {
                Auth::logout(); // Đăng xuất người dùng không đủ thẩm quyền
                return redirect()->route('login')->withErrors(['role' => 'Bạn không có quyền truy cập vào trang này.']);
            }
        }
    
        // Trả về lỗi nếu thông tin đăng nhập không đúng
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
