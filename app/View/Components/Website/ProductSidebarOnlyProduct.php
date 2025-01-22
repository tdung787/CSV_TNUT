<?php

namespace App\View\Components\Website;

use App\Models\Admin\Post;
use Illuminate\View\Component;

class ProductSidebarOnlyProduct extends Component
{
    public function __construct()
    {

    }
    // Hàm render
    public function render()
    {
        // Lấy 5 bài viết mới nhất
        $latestPosts = Post::latest('published_at')->take(5)->get();

        // Truyền dữ liệu sang view
        return view('components.website.product-sidebar-only-product', [
            'latestPosts' => $latestPosts,
        ]);
    }
}
