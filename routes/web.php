<?php
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CardCotroller;
use App\Http\Controllers\admin\OfferController;
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



});
