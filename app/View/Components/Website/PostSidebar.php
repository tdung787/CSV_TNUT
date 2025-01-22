<?php

namespace App\View\Components\Website;

use App\Models\Admin\Post;
use App\Models\Admin\PostCategory;
use App\Models\Admin\ProductCategory;
use Illuminate\View\Component;

class PostSidebar extends Component
{

    public $productCategories; // Biến chứa danh mục
    public $postCategories; // Biến chứa danh mục
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Lấy danh sách danh mục từ database
        // $this->productCategories = ProductCategory::all();
        $this->postCategories = PostCategory::all();
    }
    // Hàm render
    public function render()
    {
        // Lấy 5 bài viết mới nhất
        $latestPosts = Post::latest('published_at')->take(5)->get();

        // Truyền dữ liệu sang view
        return view('components.website.post-sidebar', [
            'latestPosts' => $latestPosts,
        ]);
    }
}
