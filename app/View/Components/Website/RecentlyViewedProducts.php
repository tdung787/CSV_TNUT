<?php

namespace App\View\Components\Website;

use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use Illuminate\View\Component;

class RecentlyViewedProducts extends Component
{
    public $products;
    public $categories; // Thêm thuộc tính categories

    public function __construct()
    {
        // Lấy danh sách sản phẩm đã xem từ session
        $productIds = session()->get('recently_viewed', []);
        
        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $this->products = Product::whereIn('id', $productIds)->get();

        // Lấy thông tin danh mục
        $this->categories = ProductCategory::all(); // Lấy tất cả danh mục
    }

    public function render()
    {
        return view('components.website.recently-viewed-products', [
            'categories' => $this->categories, // Truyền danh mục vào view
        ]);
    }
}
