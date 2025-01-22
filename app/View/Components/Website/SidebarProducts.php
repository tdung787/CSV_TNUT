<?php

namespace App\View\Components\Website;

use App\Models\Admin\Product;
use Illuminate\View\Component;

class SidebarProducts extends Component
{
    public $products;

    public function __construct()
    {
        // Lấy danh sách sản phẩm đã xem từ session
        $productIds = session()->get('recently_viewed', []);
        
        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $this->products = Product::whereIn('id', $productIds)->get();
    }

    public function render()
    {
        return view('components.website.sidebar-products');
    }
}
