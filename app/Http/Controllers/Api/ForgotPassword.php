<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPassword extends Controller
{
    public function SendEmail(Request $request)
    {
        $data = $request->all();
        $validation = Validator::make($data, ['email' => 'exists:Users,email'], ['exists' => 'Not a Valid Email Address']);
        if ($validation->fails()) {
            return response()->json(
            $validation->errors()
            , 203);
        }
        else{
            $email = $request->input('email');
            Mail::to($email)->send(new PasswordResetMail());
            return response()->json("HOLLA",200);
        }
    }
}
