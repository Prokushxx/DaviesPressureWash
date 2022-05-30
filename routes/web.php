<?php

use App\Http\Controllers\logout;
use App\Http\Livewire\Admin\Home as AdminHome;
use App\Http\Livewire\Admin\Reservation\Allreservation as AdminReservation;
use App\Http\Livewire\Admin\Settings\Profile;
use App\Http\Livewire\Admin\User\Viewusers;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\User\Reservation;
use App\Http\Livewire\Service\Home as ServiceHome;
use App\Http\Livewire\User\Home as UserHome;
use App\Http\Livewire\User\Profile as UserProfile;
use App\Http\Livewire\User\Viewreservations;

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

route::get('/', Home::class);
route::get('/service', ServiceHome::class);
route::get('/logout', [logout::class, 'logout'])->name('logout');

route::middleware(['proauth'])->group(function () {
  route::get('/login', Login::class)->name('login');
  route::get('/register', Register::class);
});

route::middleware(['admin'])->group(function () {
  route::get('/dashboard', AdminHome::class);
  route::get('/reservations', AdminReservation::class);
  route::get('/customers', Viewusers::class);
  route::get('/settings', Profile::class);
});

route::middleware(['auth'])->group(function () {
  route::get('/home', UserHome::class);
  route::get('/reservation/{id}', Reservation::class);
  route::get('/user/reservation/{id}', Viewreservations::class);
  route::get('/Profile',UserProfile::class);
});
