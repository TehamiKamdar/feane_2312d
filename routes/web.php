<?php

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin/dashboard', [AdminController::class , 'adminDashboard'])->name('admin-home');

Route::get('/admin/button', [AdminController::class , 'adminButton']);

Route::get('/admin/booking', [AdminController::class , 'bookingIndex'])->name('admin-bookings');
Route::POST('/book', [AdminController::class , 'bookingStore'])->name('booking-store');
Route::post('/admin/booking/approve/{id}', [AdminController::class , 'bookingApprove'])->name('booking-approve');
Route::post('/admin/booking/reject/{id}', [AdminController::class , 'bookingReject'])->name('booking-reject');


Route::get('/admin/product', [AdminController::class , 'productIndex'])->name('admin-products');
Route::post('/admin/product/delete/{id}', [AdminController::class , 'deleteProduct'])->name('delete-product');
Route::get('/admin/product/update/{id}', [AdminController::class , 'updateProductForm'])->name('update-product');







Route::get('/admin/alert', function () {
    return view('admin.alert');
});
Route::get('/admin/card', function () {
    return view('admin.card');
});
Route::get('/admin/form', function () {
    return view('admin.form');
});
Route::get('/admin/typography', function () {
    return view('admin.typography');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/icon', function () {
    return view('admin.icon');
});
Route::get('/admin/samplepage', function () {
    return view('admin.samplepage');
});



// WEB ROUTES
Route::get('/', function () {
    $products = product::all();
    return view('website.index', compact('products'));
})->name('user-home');

Route::get('/web/about', function () {
    return view('website.about');
});
Route::get('/web/book', function () {
    return view('website.book');
});
Route::get('/web/menu', function () {
    $products = product::all();
    return view('website.menu', compact('products'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==1){
            return redirect()->route('admin-home');
        }else{
            return redirect()->route( 'user-home');
        }
    })->name('dashboard');
});
