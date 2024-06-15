<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



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

Route::middleware('throttle:custom_api')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/index', [IndexController::class, 'index']);

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/dropdown', [CountryStateCityController::class, 'index']);
    Route::post('api/fetch-states', [CountryStateCityController::class, 'getState']);
    Route::post('api/fetch-cities', [CountryStateCityController::class, 'getCity']);

    Route::get('/customer', [CustomerController::class, 'createCutomer'])->name('customer');
    Route::post('/create', [CustomerController::class, 'storeCustomer'])->name('cutomer.store');
    // Route::get('/customer/edit/{id}', [CustomerController::class, 'editCustomer'])->name('customer.edit');
    // Route::post('/customer/update/{id}', [CustomerController::class, 'updateCustomer'])->name('customer.update');
    Route::get('/customer/delete/{customer_id}', [CustomerController::class, 'deleteCustomer'])->name('customer.delete');
    Route::get('/customer/forcedelete/{customer_id}', [CustomerController::class, 'forcedeleteCustomer'])->name('customer.forcedelete');
    Route::get('/customer/restore/{customer_id}', [CustomerController::class, 'restoreCustomer'])->name('customer.restore');

    Route::get('/customer/view/{customer_id}', [CustomerController::class, 'viewCustomer'])->name('customer.view');
    Route::get('/customer/list', [CustomerController::class, 'showCustomer'])->name('customer.list');
    Route::get('/customer/trash', [CustomerController::class, 'tarshCustomer'])->name('customer.trash');

    Route::resource('items', ItemController::class);
    Route::get('/item/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/item/store', [ItemController::class, 'store'])->name('items.store');
    Route::get('/item/list', [ItemController::class, 'index'])->name('items.index');
    Route::get('/item/edit/{product_id}', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/item/update/{product_id}', [ItemController::class, 'update'])->name('items.update');
    // Route::get('/item/delete/{id}', [ItemController::class, 'delete'])->name('items.delete');
    Route::get('/item/view/{product_id}', [ItemController::class, 'view'])->name('items.view');



    // session handle----------------------------------------------------------------------------------------------------------------
    Route::get('get-all-session', function () {
        $session = session()->all();
        p($session);
    });

    //store the session handle----------------------------------------------------------------------------------------------------------------
    Route::get('set-session', function (Request $request) {

        $request->session()->put('name', 'ram');
        $request->session()->put('email', 'ram@gmail.com');
        Session::flash('status', 'success');
        return redirect('get-all-session');
    });
    
    //distroy the session handle----------------------------------------------------------------------------------------------------------------
    Route::get('distroy-session', function () {

        session()->forget(['name', 'email']);

        return redirect('get-all-session');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
