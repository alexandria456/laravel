<?php

use App\Http\Controllers\Admin\PassengerController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\PageController;
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
/*
Route::get('/', function () {
    return view('test');
});
/*
Route::post('/send-email',function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return 'Send Email';
});


Route::match(['post', 'get'], '/', function(){
    if(!empty($_POST)){
        dump($_POST);
    }
    return view( 'test');
})->name('test');
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ReysController;

//Route::get('/search', [HomeController::class, 'index']);

Route::get('/search',[SearchController::class,'index'] )->name('search');
Route::get('/',[HomeController::class,'index'] );


//Route::prefix('admin')->group(function() {

Route::get('/Admin', [MainController::class, 'index'])->name('Admin.index');

Route::get('/Admin/Flights', [ReysController::class, 'index'])->name('Flights.index');
Route::get('/Admin/Flights/create', [ReysController::class, 'create'])->name('Flights.create');
Route::post('/Admin/Flights', [ReysController::class, 'store'])->name('Flights.store');
Route::get('/Admin/Flights/{Flight}/edit', [ReysController::class, 'edit'])->name('Flights.edit');
Route::put('/Admin/Flights/{Flight}', [ReysController::class, 'update'])->name('Flights.update');
Route::delete('/Admin/Flights/{Flight}', [ReysController::class, 'destroy'])->name('Flights.destroy');


Route::get('/Admin/Passengers', [PassengerController::class, 'index'])->name('Passengers.index');
Route::get('/Admin/Passengers/create', [PassengerController::class, 'create'])->name('Passengers.create');
Route::post('/Admin/Passengers', [PassengerController::class, 'store'])->name('Passengers.store');
Route::get('/Admin/Passengers/{Passenger}/edit', [PassengerController::class, 'edit'])->name('Passengers.edit');
Route::put('/Admin/Passengers/{Passenger}', [PassengerController::class, 'update'])->name('Passengers.update');
Route::delete('/Admin/Passengers/{Passenger}', [PassengerController::class, 'destroy'])->name('Passengers.destroy');


Route::get('/Admin/Tickets', [TicketController::class, 'index'])->name('Tickets.index');
Route::get('/Admin/Tickets/create', [TicketController::class, 'create'])->name('Tickets.create');
Route::post('/Admin/Tickets', [TicketController::class, 'store'])->name('Tickets.store');
Route::get('/Admin/Tickets/{Ticket}/edit', [TicketController::class, 'edit'])->name('Tickets.edit');
Route::put('/Admin/Tickets/{Ticket}', [TicketController::class, 'update'])->name('Tickets.update');
Route::delete('/Admin/Tickets/{Ticket}', [TicketController::class, 'destroy'])->name('Tickets.destroy');


Route::get('/create',[PageController::class,'create'] );

Route::get('/page/about', [PageController::class,'show']);


Route::fallback(function () {
    abort( 404, 'Oops! Page not found..');
});



