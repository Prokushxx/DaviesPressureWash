<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Search extends Controller
{
  public function sendResponse($result)
  {
    $response = [
      'success' => true,
      'data' => $result,
      // 'message' => $message,
    ];
    return response()->json($response, 200);
  }

  public function sendError($error, $erorMessages = [], $code = 404)
  {
    $response =
      [
        'success' => false,
        'message' => $error,
      ];
    if (!empty($erorMessages)) {
      $response['data'] = $erorMessages;
    }
    return response()->json($response, $code);
  }

  public function search($info)
  {
    $searchinfo = User::where('name', 'LIKE', '%' . $info . '%')->get();
    if ($searchinfo) {
      return $this->sendResponse($searchinfo);
    }elseif(!$searchinfo){
      return $this->sendError('No Data.');
    }
  }
}
