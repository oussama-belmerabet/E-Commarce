<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CommandsComponent;
use App\Http\Livewire\VentComponent;
use App\Http\Livewire\Panier;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::get('/commands',CommandsComponent::class)->name('commands');
Route::get('/vents',VentComponent::class)->name('vents');
Route::get('/' ,HomeComponent::class )->name('home.index');
Route::get('/shop' ,ShopComponent::class )->name('shop');
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/panier' ,Panier::class )->name('shop.cart');
Route::get('/checkout' ,CheckoutComponent::class )->name('shop.checkout');
Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
