<?php

namespace App\Observers;

use App\Models\Admin\PostCategory;
use Illuminate\Support\Str;

class PostCategoryObserver
{
    public function saving(PostCategory $post)
    {
        $post->title = Str::ucfirst($post->title);
        $post->slug = Str::slug($post->title);
    }
}
