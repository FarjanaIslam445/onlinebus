<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\CountersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\RoutsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\HomepagesController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\SeatsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ConfirmsController;


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

//Route For Admin Login
Route::get('/adminlogin',[AdminsController::class,'adminlogin'])->name('adminlogin');

Route::post('/login/process',[AdminsController::class,'loginProcess'])->name('login.process');
//Route For Logout
Route::get('/admin/logouts',[AdminsController::class,'logouts'])->name('logouts');
//->name('master')->name->middleware('auth');
//Route For User Registration Form
Route::get('/userform',[UsersController::class,'userform'])->name('userform');
Route::post('/userinsert',[UsersController::class,'userinsert'])->name('userinsert');
Route::get('/userview',[UsersController::class,'userview'])->name('userview');
Route::get('/useredit/{id}',[UsersController::class,'useredit'])->name('useredit');
Route::post('/userupdate/{id}',[UsersController::class,'userupdate'])->name('userupdate');
Route::get('/userdelete/{id}',[UsersController::class,'userdelete'])->name('userdelete');



//Middleware for User
//Route for login
Route::get('/login',[LoginController::class,'login'])->name('loginform');
Route::post('user/login',[LoginController::class,'loginput'])->name('loginput');

Route::group(['middleware'=>['user']],function(){


//Route for Homepage
Route::get('/homepage',[HomepagesController::class,'homepage'])->name('homepage');
Route::post('/homepagestore',[HomepagesController::class,'homepagestore'])->name('frontend.homepagestore');
Route::get('/bookinglist',[HomepagesController::class,'bookinglist'])->name('bookinglist');
//Route::post('/bookingupdate/{id}',[HomepageesController::class,'bookingupdate'])->name('bookingupdate');
Route::get('/bookingdetails',[BookingsController::class,'bookingdetails'])->name('bookingdetails');

//Payment
Route::get('/Payment/{id}',[ProfileController::class,'Payment'])->name('payment');
Route::post('/paystore/{id}',[ProfileController::class,'paystore'])->name('paystore');

});



//user logout
Route::get('/user/logout',[LoginController::class,'logout'])->name('logout');

//Frontpage
Route::get('/frontpage',[FrontpageController::class,'frontpage'])->name('frontpage');
//Profile


//Route For Admin Registration Form
//Route::get('/Admin',[AdminsController::class,'registrationform'])->name('admin');
//Route::get('/viewform',[AdminsController::class,'registrationview'])->name('viewform');
//Route::post('/store',[AdminsController::class,'store'])->name('store');
///Start Backend Route/////


Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/', function () {
        return view('master');
        })->name('dashboard');


//Route For Bus Details Form
Route::get('/Bus',[BusController::class,'busform'])->name('bus');
Route::post('/busint',[BusController::class,'busint'])->name('busint');
Route::get('/busview',[BusController::class,'busview'])->name('busview');
Route::get('/busedit/{id}',[BusController::class,'busedit'])->name('busedit');
Route::post('/busupdate/{id}',[BusController::class,'busupdate'])->name('busupdate');
Route::get('/busdelete/{id}',[BusController::class,'busdelete'])->name('busdelete');

//Route For Driver Details Form
Route::get('/Driver',[DriversController::class,'Driverform'])->name('Driver');
Route::get('/Driverview',[DriversController::class,'Driverview'])->name('Dvrview');
Route::post('/Dstore',[DriversController::class,'dstore'])->name('dstore');
Route::get('/driveredit/{id}',[DriversController::class,'driveredit'])->name('driveredit');
Route::post('/driverupdate/{id}',[DriversController::class,'driverupdate'])->name('driverupdate');
Route::get('/driverdelete/{id}',[DriversController::class,'driverdelete'])->name('driverdelete');


//Route For Counter
Route::get('/counterform',[CountersController::class,'counterform'])->name('counterform');
Route::post('/cinput',[CountersController::class,'cinput'])->name('cinput');
Route::get('/counterview',[CountersController::class,'counterview'])->name('counterview');
Route::get('/counteredit/{id}',[CountersController::class,'counteredit'])->name('counteredit');
Route::post('/counterupdate/{id}',[CountersController::class,'counterupdate'])->name('counterupdate');
Route::get('/counterdelete/{id}',[CountersController::class,'counterdelete'])->name('counterdelete');
//Route for Dashboard
Route::get('/dashboard',[DashboardsController::class,'dashboard'])->name('master');
//Route For Trip
Route::get('/tripform',[TripsController::class,'tripform'])->name('tripform');
Route::post('/tripstore',[TripsController::class,'tripstore'])->name('tripstore');
Route::get('/triplist',[TripsController::class,'triplist'])->name('triplist');
Route::get('/tripedit/{id}',[TripsController::class,'tripedit'])->name('tripedit');
Route::post('/tripupdate/{id}',[TripsController::class,'tripupdate'])->name('tripupdate');
Route::get('/tripdelete/{id}',[TripsController::class,'tripdelete'])->name('tripdelete');
Route::get('/cache',[TripsController::class,'index'])->name('cache');
//Route For Route
Route::get('/routform',[RoutsController::class,'routform'])->name('routform');
Route::post('/routstore',[RoutsController::class,'routstore'])->name('routstore');
Route::get('/routlist',[RoutsController::class,'routlist'])->name('routlist');
Route::get('/routeedit/{id}',[RoutsController::class,'routeedit'])->name('routeedit');
Route::post('/routeupdate/{id}',[RoutsController::class,'routeupdate'])->name('routeupdate');
Route::get('/routedelete/{id}',[RoutsController::class,'routedelete'])->name('routedelete');
//Route for Report
Route::get('/reportform',[ReportsController::class,'reportform'])->name('reportform');
Route::post('/reportstore',[ReportsController::class,'reportstore'])->name('reportstore');
Route::get('/reportlist',[ReportsController::class,'reportlist'])->name('reportlist');
//Location
Route::get('/locationform',[LocationsController::class,'locationform'])->name('locationform');
Route::post('/locationstore',[LocationsController::class,'locationstore'])->name('locationstore');
Route::get('/locationlist',[LocationsController::class,'locationlist'])->name('locationlist');
Route::get('/locationedit/{id}',[LocationsController::class,'locationedit'])->name('locationedit');
Route::post('/locationupdate/{id}',[LocationsController::class,'locationupdate'])->name('locationupdate');
Route::get('/locationdelete/{id}',[LocationsController::class,'locationdelete'])->name('locationdelete');

//Route For Booking Controller
Route::get('/bookingtable',[BookingsController::class,'bookingtable'])->name('bookingtable');
Route::post('/bookingstore',[SeatsController::class,'bookingstore'])->name('bookingstore');
//Route for Confirm
Route::get('/confirmtable/{id}',[ConfirmsController::class,'confirmtable'])->name('confirmtable');
Route::get('/bookdelete/{id}',[BookingsController::class,'bookdelete'])->name('bookdelete');
//payment
Route::get('/paylist',[ProfileController::class,'paylist'])->name('paylist');
});









//Route for Location

//Route For Seat Controller
Route::get('/seat/{id}/{date}',[SeatsController::class,'seat'])->name('seat');


Route::post('/seatstore',[SeatsController::class,'seatstore'])->name('seatstore');



