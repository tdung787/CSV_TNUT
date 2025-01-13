<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CsvController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [CsvController::class, 'index'])->name('home');

Route::get('/home', [CsvController::class, 'index'])->name('home');
//home

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'can:admin']);

Route::get('/admin/csv', [AdminController::class, 'csv'])->name('admin_csv')->middleware(['auth', 'can:admin']);

// Route::get('/admin/baiviet', [AdminController::class, 'baiviet'])->name('admin_baiviet')->middleware(['auth', 'can:admin']);

Route::resource('users', AdminController::class)
    ->only('edit', 'update')
    ->middleware('auth');

Route::delete('/user/{user}', [AdminController::class, 'destroy'])->name('users.destroy')->middleware(['auth', 'can:admin']);

Route::post('/update_poster/{id}', [AdminController::class, 'updatePoster'])->name('admin.update.poster')->middleware(['auth', 'can:admin']);

Route::post('/delete_poster/{id}', [AdminController::class, 'deletePoster'])->name('admin.delete.poster')->middleware(['auth', 'can:admin']);
//admin

//nav
Route::get('/dangbai', [CsvController::class, 'dangbai'])->name('dangbai');

Route::get('/banchaphanh', [CsvController::class, 'banchaphanh'])->name('banchaphanh');

Route::get('/thuvienhinhanh', [CsvController::class, 'thuvienhinhanh'])->name('thuvienhinhanh');

Route::get('/hoicodiencactinh', [CsvController::class, 'hoicodiencactinh'])->name('hoicodiencactinh');

Route::get('/hoicodiencactinh/{post}', [CsvController::class, 'hoicodiencactinh_show'])->name('hoicodiencactinh.show');

Route::get('/tinhnguoicodien', [CsvController::class, 'tinhnguoicodien'])->name('tinhnguoicodien');

Route::get('/tinhnguoicodien/{post}', [CsvController::class, 'tinhnguoicodien_show'])->name('tinhnguoicodien.show');

Route::get('/tieubieu', [CsvController::class, 'tieubieu'])->name('tieubieu');

Route::get('/tieubieu/{post}', [CsvController::class, 'tieubieu_show'])->name('tieubieu.show');

Route::get('/sumenh', [CsvController::class, 'sumenh'])->name('sumenh');

Route::get('/sukien', [CsvController::class, 'sukien'])->name('sukien');

Route::get('/sukien/{post}', [CsvController::class, 'sukien_show'])->name('sukien.show');

Route::get('/dieule', [CsvController::class, 'dieule'])->name('dieule');

Route::get('/quytuhao', [CsvController::class, 'quytuhao'])->name('quytuhao');

Route::get('/quyphattrien', [CsvController::class, 'quyphattrien'])->name('quyphattrien');

Route::get('/dangkydonggop', [CsvController::class, 'dangkydonggop'])->name('dangkydonggop');

Route::post('/upload', [CsvController::class, 'upload'])->name('ckeditor.upload');

Route::post('/create', [CsvController::class, 'create'])->name('create_post');
//nav

//auth
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    Route::post('/register', [AuthController::class, 'store']);

    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
//auth

//alumni
Route::resource('alumni', AlumniController::class)
    ->only('edit', 'update')
    ->middleware(['auth', 'can:admin']);

Route::delete('/alumni/{alumnus}', [AlumniController::class, 'destroy'])->name('alumni.destroy')->middleware(['auth', 'can:admin']);

Route::get('/alumni', [AlumniController::class, 'alumni'])->name('alumni');

Route::post('/alumni', [AlumniController::class, 'store']);

Route::get('/list', [AlumniController::class, 'list'])->name('lists');

Route::get('/list/{alumnus}', [AlumniController::class, 'show'])->name('lists.show');
//alumni