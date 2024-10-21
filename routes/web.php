<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\MissionAndVissionController;
use App\Http\Controllers\CareerDetailsController;
use App\Http\Controllers\CareerDetailsRecptController;

use App\Http\Controllers\Loan\PersonalController;
use App\Http\Controllers\Loan\BusinessController;
use App\Http\Controllers\Loan\GoldController;
use App\Http\Controllers\Loan\GroupController;
use App\Http\Controllers\Loan\ProductController;
use App\Http\Controllers\Loan\VehicleController;
use App\Http\Controllers\Mail\PHPMailerController;
use App\Http\Controllers\From\LoanFromController;
use App\Http\Controllers\From\BusinessFormController;
use App\Http\Controllers\From\GroupFormController;
use App\Http\Controllers\From\ProductFormController;
use App\Http\Controllers\From\GoldFormController;
use App\Http\Controllers\From\VehicleFromController;

Route::get('/', function () {
    return view('index');
});

//Common Page///
Route::get('/about',[AboutController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/career',[CareerController::class, 'index']);
Route::get('/mission&vission',[MissionAndVissionController::class, 'index']);
Route::get('/career-details-multiple',[CareerDetailsController::class, 'index']);
Route::get('/career-details-receptionist',[CareerDetailsRecptController::class, 'index']);

//Loan Route///
Route::get('/personal',[PersonalController::class, 'index']);
Route::get('/business',[BusinessController::class, 'index']);
Route::get('/gold',[GoldController::class, 'index']);
Route::get('/group',[GroupController::class, 'index']);
Route::get('/product',[ProductController::class, 'index']);
Route::get('/vehicle',[VehicleController::class, 'index']);

////send mail rout//
Route::post('/contact',[ContactController::class, 'sendmail2'])->name('send.mail');

////form Loan Application Route/////
Route::get('/apply-from', [LoanFromController::class, 'show']);
Route::post('/apply-from', [LoanFromController::class, 'composeEmail'])->name('from.sent');
////business Loan Application Route/////
Route::get('/busines-form', [BusinessFormController::class, 'show']);
Route::post('/busines-form', [BusinessFormController::class, 'composeEmail'])->name('business.from.sent');
////group Loan Application Route/////
Route::get('/group-form', [GroupFormController::class, 'show']);
Route::post('/group-form', [GroupFormController::class, 'composeEmail'])->name('group.from.sent');

////product Loan Application Route/////
Route::get('/product-form', [ProductFormController::class, 'show']);
Route::post('/product-form', [ProductFormController::class, 'composeEmail'])->name('product.from.sent');

////gold Loan Application Route/////
Route::get('/gold-from', [GoldFormController::class, 'show']);
Route::post('/gold-from', [GoldFormController::class, 'composeEmail'])->name('gold.from.sent');
////vehilce Loan Application Route/////
Route::get('/vehilce-from', [VehicleFromController::class, 'show']);
Route::post('/vehilce-from', [VehicleFromController::class, 'composeEmail'])->name('vehilce.from.sent');

