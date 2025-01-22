<?php

use App\Http\Controllers\Admin\AboutCategoryController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FilePond\FilePondController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RecruitmentController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\Support\TinymceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    ///

    Route::prefix('admin')->name('admin.')->group(function () {
        // Routes for Abouts
        // Route::resource('abouts', AboutController::class);

        // Route::resource('contacts', ContactController::class);
        // //Tuyển dụng
        // Route::resource('recruitments', RecruitmentController::class);

        // Routes cho cửa hàng
        // Route::resource('stores', StoreController::class);

        // Routes cho đối tác
        // Route::resource('partners', PartnerController::class);

        // Route::resource('comments', CommentController::class);

        // Route::resource('roles', RoleController::class);

        // Route::resource('users', UserController::class);
        // Route::get('users', [UserController::class, 'index'])->name('users.index');
        // Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        // Route::post('users', [UserController::class, 'store'])->name('users.store');
        // Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        // Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        // Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        ///Bài viết
        //Category bài viết
        Route::get('post_categories', [PostCategoryController::class, 'index'])->name('post_categories.index');
        Route::get('post_categories/create', [PostCategoryController::class, 'create'])->name('post_categories.create');
        Route::post('post_categories', [PostCategoryController::class, 'store'])->name('post_categories.store');
        Route::get('post_categories/{postCategory}/edit', [PostCategoryController::class, 'edit'])->name('post_categories.edit');
        Route::put('post_categories/{postCategory}', [PostCategoryController::class, 'update'])->name('post_categories.update');
        Route::delete('post_categories/{postCategory}', [PostCategoryController::class, 'destroy'])->name('post_categories.destroy');

        //bài viết
        Route::get('posts', [PostController::class, 'index'])->name('posts.index');
        Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('posts', [PostController::class, 'store'])->name('posts.store');
        Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::post('posts/{post}/toggle-visibility', [PostController::class, 'toggleVisibility'])->name('posts.toggleVisibility');


        ///Sản phẩm
        //Category Sản phẩm
        // Route::get('product_categories', [ProductCategoryController::class, 'index'])->name('product_categories.index');
        // Route::get('product_categories/create', [ProductCategoryController::class, 'create'])->name('product_categories.create');
        // Route::post('product_categories', [ProductCategoryController::class, 'store'])->name('product_categories.store');
        // Route::get('product_categories/{productCategory}/edit', [ProductCategoryController::class, 'edit'])->name('product_categories.edit');
        // Route::put('product_categories/{productCategory}', [ProductCategoryController::class, 'update'])->name('product_categories.update');
        // Route::delete('product_categories/{productCategory}', [ProductCategoryController::class, 'destroy'])->name('product_categories.destroy');

        //Sản phẩm
        // Route::get('products', [ProductController::class, 'index'])->name('products.index');
        // Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        // Route::post('products', [ProductController::class, 'store'])->name('products.store');
        // Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        // Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
        // Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

        // //Giỏ hàng
        // Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
        // Route::delete('/carts/{cart}', [CartController::class, 'destroy'])->name('carts.destroy');

        // Routes cho Admin quản lý đơn hàng
        // Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        // Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
        // Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
        // Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

        // Routes Profile
        // Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
        // Route::put('/profiles/update', [ProfileController::class, 'update'])->name('profiles.update');
        // Route::post('/profiles/update-avatar', [ProfileController::class, 'updateAvatar'])->name('profiles.update-avatar');


        Route::post('tinymce-attachment', TinymceController::class)->name('tinymce.attachment');
    });
});

Route::post('/upload', [FilePondController::class, 'upload'])->name('admin.filepond.upload');
Route::delete('/revert', [FilePondController::class, 'revert'])->name('filepond.revert');
Route::get('/load/{directory}/{filename}', [FilepondController::class, 'load'])
    ->where('directory', '.*')  // Cho phép nhận nested directories
    ->name('filepond.load');

// Đảm bảo khi route không tồn tại sẽ trả về lỗi 404
// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });

// require __DIR__ . '/auth.php';
