<?php

use App\Http\Controllers\Api\Register;
use App\Http\Controllers\Api\Search;
use App\Http\Controllers\Api\User;
use App\Http\Controllers\Api\User\Appointment;
use App\Http\Controllers\Api\User\Profile;
use App\Http\Controllers\Api\User\ReserveUser;
use App\Http\Controllers\Api\User\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::middleware(['auth:sanctum'])->group(function () {
  route::get('/reserveuser',[ReserveUser::class,'returnReservation']);
  route::post('/logout/{id}', [Register::class, 'logout']);
  route::resource('/user', User::class);
});
route::resource('/appointment',Appointment::class);
route::resource('/service', Services::class);
route::post('/register', [Register::class, 'register']);
route::post('/login', [Register::class, 'login']);
route::resource('/profile',User::class)->only('update');
route::resource('/passwordchange',Profile::class);
route::get('/search/{info}',[Search::class,'search']);
