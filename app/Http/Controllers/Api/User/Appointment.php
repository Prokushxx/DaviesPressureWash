<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Validator;

class Appointment extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return response()->json(Reservation::with('user', 'service')->get());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $data = $request->all();
    // dd($data);
    $validation = validator::make(
      $data,
      [
        'date' => 'required|after:today|date',
        'time' => 'required',
        'user_id' => 'required',
        'service_id' => 'required',
      ]
    );

    if ($validation->fails()) {
      return response()->json(
        $validation->errors(),
        202
      );
    } else {
      Reservation::create($data);
      return response()->json($data, 200);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $findreservation = Reservation::with('user')->findOrFail($id);
    return response()->json($findreservation, 200);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
    $formdata = $request->input();
    $validation = validator::make(
      $formdata,
      [
        'date' => 'after:today|date',
      ]
    );
    if ($validation->fails()) {
      return response()->json($validation->errors(), 202);
    } else {
      $finddata = Reservation::findOrFail($id);
      $finddata->date = $request->input('date');
      $finddata->time = $request->input('time');
      $finddata->update();
      return response()->json(["data" => $finddata, "respstatus" => 200]);
    }
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
    Reservation::find($id)->delete();
    return response()->json('Delete Success', 200);
  }
}
