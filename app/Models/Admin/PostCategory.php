<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class PostCategory extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $table = 'post_categories';

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    protected function createdAtVi(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->created_at)->format('h:i, d/m/Y'),
        );
    }

    protected function updatedAtVi(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->updated_at)->format('h:i, d/m/Y'),
        );
    }
}
