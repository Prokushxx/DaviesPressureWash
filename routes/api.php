<?php

use App\Http\Controllers\Api\ForgotPassword;
use App\Http\Controllers\Api\Register;
use App\Http\Controllers\Api\Search;
use App\Http\Controllers\Api\User;
use App\Http\Controllers\Api\User\Appointment;
use App\Http\Controllers\Api\User\Profile;
use App\Http\Controllers\Api\User\ReserveUser;
use App\Http\Controllers\Api\User\Services;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


route::middleware(['auth:sanctum'])->group(function () {
  route::get('/reserveuser',[ReserveUser::class,'returnReservation']);
  route::post('/logout/{id}', [Register::class, 'logout']);
  route::resource('/user', User::class);
  route::resource('/appointment',Appointment::class);
});

route::post('/forgotpassword',[ForgotPassword::class,'SendEmail']);
route::post('/resetpassword',[ResetPassword::class,'PasswordReset']);
route::resource('/service', Services::class);
route::post('/register', [Register::class, 'register']);
route::post('/login', [Register::class, 'login']);
route::resource('/profile',User::class)->only('update');
route::resource('/passwordchange',Profile::class);
route::get('/search/{info}',[Search::class,'search']);
