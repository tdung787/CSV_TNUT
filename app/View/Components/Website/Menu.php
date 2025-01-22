<?php

namespace App\View\Components\Website;

use App\Models\Admin\About;
use App\Models\Admin\PostCategory;
use App\Models\Admin\ProductCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public $productCategories; // Biến chứa danh mục
    public $postCategories; // Biến chứa danh mục
    public $aboutPages;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Lấy danh sách danh mục từ database
        // $this->productCategories = ProductCategory::all();
        $this->postCategories = PostCategory::all();
        // $this->aboutPages = About::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.menu');
    }
}
