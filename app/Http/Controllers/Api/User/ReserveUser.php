<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveUser extends Controller
{
  //
  public function returnReservation()
  {
    $user = Auth::user();
    $ResponseData = [];
    $ResponseData['reservation'] = $user->reservation;
    return response()->json($ResponseData, 200);
  }
}
