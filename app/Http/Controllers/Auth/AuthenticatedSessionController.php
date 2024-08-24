<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Xác thực thông tin đăng nhập
        $request->authenticate();

        // Kích hoạt lại phiên làm việc
        $request->session()->regenerate();

        // Lấy thông tin người dùng
        $user = Auth::user();

        // Chuyển hướng dựa trên vai trò người dùng
        if ($user->idgroup == 1) {
            // Nếu là quản trị viên, chuyển hướng đến trang quản trị
            return redirect()->intended(route('admin.index'));
        } else {
            // Nếu là người dùng, chuyển hướng đến trang người dùng
            return redirect()->intended(route('index'));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
