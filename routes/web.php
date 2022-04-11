<?php

use App\Http\Controllers\Auth\Login as AuthLogin;
use App\Http\Controllers\logout;
use App\Http\Livewire\Admin\Home as AdminHome;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\Service\Home as ServiceHome;
use App\Http\Livewire\User\Home as UserHome;

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
route::get('/login', Login::class)->name('login');
route::get('/logout', [logout::class, 'logout'])->name('logout');
route::get('/register', Register::class);

// route::middleware(['admin'])->group(function () {
  route::get('/home', UserHome::class);
// });

route::get('/dashboard', AdminHome::class);
