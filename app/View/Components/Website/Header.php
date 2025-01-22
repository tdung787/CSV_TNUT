<?php

namespace App\View\Components\Website;

use App\Models\Admin\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Header extends Component
{
    public $cartQuantity;

    public function __construct()
    {
        // if (Auth::check()) {
        //     // Người dùng đã đăng nhập: Lấy tổng số lượng từ database
        //     $this->cartQuantity = Cart::where('user_id', Auth::id())->sum('quantity');
        // } else {
        //     // Người dùng chưa đăng nhập: Lấy tổng số lượng từ cart không có user_id
        //     $this->cartQuantity = Cart::whereNull('user_id')->sum('quantity');
        // }
    }
    public function render(): View|Closure|string
    {
        return view('components.website.header');
    }
}
