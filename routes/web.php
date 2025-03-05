<?php
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CardCotroller;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\OfferController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'login']);
Route::match(['get', 'post'], '/admin/forgot-password', [AdminController::class, 'forgotPassword']);
Route::match(['get', 'post'], '/admin/reset-password', [AdminController::class, 'sendResetLink'])->name('admin.forgot-password');
Route::get('admin/new-password', [AdminController::class, 'showNewPasswordForm'])->name('admin.new-password');
Route::post('admin/new-password', [AdminController::class, 'updatePassword'])->name('admin.update-password');



Route::middleware(['admin'])->group(function () {
    Route::match(['get', 'post'], '/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::match(['get', 'post'], '/admin/editProfile', [AdminController::class, 'editProfile']);
    Route::match(['get', 'post'], '/admin/changePassword', [AdminController::class, 'changePassword']);
    Route::match(['get', 'post'], '/admin/logout', [AdminController::class, 'logout']);
    Route::match(['get', 'post'], '/admin/profile', [AdminController::class, 'profile']);
    Route::match(['get', 'post'], '/admin/cards', [CardCotroller::class, 'index'])->name('admin.cards');
    Route::get('admin/cards/export', [CardCotroller::class, 'export'])->name('admin.cards.export');
    Route::match(['get', 'post'], '/admin/card-add', [CardCotroller::class, 'add'])->name('admin.card.add');
    Route::match(['get', 'post'], '/admin/card-store', [CardCotroller::class, 'store'])->name('admin.card.store');
    Route::get('/admin/card-edit/{id}', [CardCotroller::class, 'edit'])->name('admin.card.edit');
    Route::match(['get', 'post'], '/admin/card-update/{id}', [CardCotroller::class, 'update'])->name('admin.card.update');
    Route::delete('/admin-card-delete/{id}',  [CardCotroller::class, 'delete'])->name('admin.card.delete');

    Route::match(['get', 'post'], '/admin/offers', [OfferController::class, 'index'])->name('admin.offers');
    Route::match(['get', 'post'], '/admin/offer-add', [OfferController::class, 'add'])->name('admin.offer.add');
    Route::match(['get', 'post'], '/admin/offer-store', [OfferController::class, 'store'])->name('admin.offer.store');
    Route::get('/admin/offer-edit/{id}', [OfferController::class, 'edit'])->name('admin.offer.edit');
    Route::match(['get', 'post'], '/admin/offer-update/{id}', [OfferController::class, 'update'])->name('admin.offer.update');
    Route::delete('/admin-offer-delete/{id}',  [OfferController::class, 'delete'])->name('admin.offer.delete');
    Route::get('admin/offers/export', [OfferController::class, 'export'])->name('admin.offers.export');

    Route::match(['get', 'post'], '/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('admin/category/export', [CategoryController::class, 'export'])->name('admin.category.export');
    Route::match(['get', 'post'], '/admin/category-add', [CategoryController::class, 'add'])->name('admin.category.add');
    Route::match(['get', 'post'], '/admin/category-store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category-edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::match(['get', 'post'], '/admin/category-update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin-category-delete/{id}',  [CategoryController::class, 'delete'])->name('admin.category.delete');

    Route::match(['get', 'post'], '/admin/cms-page', [PageController::class, 'index'])->name('admin.pages');
    Route::get('admin/cms-page/export', [PageController::class, 'export'])->name('admin.page.export');
    Route::match(['get', 'post'], '/admin/cms-page-add', [PageController::class, 'add'])->name('admin.page.add');
    Route::match(['get', 'post'], '/admin/cms-page-store', [PageController::class, 'store'])->name('admin.page.store');
    Route::get('/admin/cms-page-edit/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::match(['get', 'post'], '/admin/cms-page-update/{id}', [PageController::class, 'update'])->name('admin.page.update');
    Route::delete('/admin-cms-page-delete/{id}',  [PageController::class, 'delete'])->name('admin.page.delete');



});
