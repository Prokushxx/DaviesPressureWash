<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class Register extends Controller
{
  //
  public function register(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => ['required', 'confirmed'],
      'address' => 'required',
      'telephone' => 'required|min:10|max:10',
      'password_confirmation' => 'required',
    ], [
      'required' => '*Please fill out this field',
      'confirmed' => '*Password does not match'
    ]);

    if ($validation->fails()) {
      return response()->json($validation->errors(), 202);
    } else {
      $allData = $request->all();
      $allData['password'] = bcrypt($allData['password']);
      $user = User::create($allData);
      $resArr = [];
      $resArr['token'] = $user->createToken($user->email . '_Token')->plainTextToken;
      return response()->json($resArr, 200);
    }
  }

  public function login(Request $request)
  {
    // dd($request);
    $validation = validator::make($request->all(), [
      'email' => 'required|email',
      'password' => 'required',
    ], [
      'required' => '*PLease fill out this field',
    ]);
    if ($validation->fails()) {
      return response()->json($validation->errors(),202);
    } else {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::user();
        $resArr = [];
        $resArr['token'] = $user->createToken($user->email.'auth_token')->plainTextToken;
        $resArr['user'] = $user;
        $resArr['reservation'] = $user->reservation; 
        return response()->json($resArr,200);
      } else {
        return response()->json(['error' => 'Incorrect Credentials'], 203);
      }
    }
  }

  public function logout($id)
   {
     $authuserid = User::findOrFail($id);
     $tokens = $authuserid->tokens()->delete();
     Auth::logout();
     return response()->json([
       'successMessage' => 'Deleted Token',
     ]); 
  }
}
