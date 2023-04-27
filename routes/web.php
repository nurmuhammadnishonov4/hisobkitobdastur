<?php

use App\Http\Controllers\DebtController;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('savdo');
// });


// Route::get('user/{id?}', function ($id = null) {
//     return "Sizning ID raqamingiz $id";
// });

Route::post('EnterLogin', [TradeController::class, 'login'])->name('EnterLogin');  //login
Route::get('/', [TradeController::class, 'index'])->name(('savdo'));
Route::post('store', [TradeController::class, 'store']);
Route::delete('destroy/{id}', [TradeController::class, 'destroy']);
Route::get('edit/{id}', [TradeController::class, 'edit'])->name('edit');
Route::post('update/{id}', [TradeController::class, 'update'])->name('update');
Route::get('show/{id}', [TradeController::class, 'show'])->name('show');
Route::view('/savdo', 'savdo');
Route::view('/xodim', 'xodim');
//Qarz
Route::get('/qarz', [DebtController::class, 'menu']);
Route::get('/debtShow/{id}', [DebtController::class, 'debtShow'])->name('debtShow');
Route::post('/menuAdd', [DebtController::class, 'menuAdd'])->name('menuAdd');
Route::post('/debtAdd', [DebtController::class, 'debtAdd'])->name('debtAdd');
Route::get('/DaydebtShow/{id}', [DebtController::class, 'DaydebtShow'])->name('DaydebtShow');
Route::delete('/DaydebtDelete/{id}', [DebtController::class, 'DaydebtDelete'])->name('DaydebtDelete');
Route::delete('/MenudebtDelete/{id}', [DebtController::class, 'MenudebtDelete'])->name('MenudebtDelete');


Route::view('login', 'login')->name('login');

Route::fallback(function () {
    return Redirect::to('http://aboutmi.netlify.app');
});

// Route::get('/', function () {
//     echo "<script> alert('Hello World'); </script>";
// });
