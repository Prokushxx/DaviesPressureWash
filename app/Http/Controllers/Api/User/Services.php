<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Validator;

class Services extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    // $data = Service::paginate(3);
    $data = Service::all();
    return response()->json($data,200);
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
    $validation = validator::make(
      $data,
      [
        'name' => 'required|unique:services,name',
        'cost' => 'required',
        'desc' => 'required',
      ],
      [
        'required' => '*Please fill out this field',
      ]
    );

    if ($validation->fails()) {
      return response()->json($validation->errors(), 202);
    } else {
      Service::create($data);
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
    //
    $findService = Service::findOrFail($id);
    return response()->json($findService, 200);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
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
    $findService = Service::findOrFail($id);
    $data = $request->input();
    $validation = validator::make(
      $data,
      [
        'name' => 'required',
        'cost' => 'required',
        'desc' => 'required',
      ],
      [
        'required' => '*Please fill out this field'
      ]
    );

    if ($validation->fails()) {
      return response()->json(['error' => $validation->errors(), 'status' => 202]);
    } else {
      $findService->update($data);
      return response()->json($findService, 200);
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
    Service::find($id)->delete();
    $service = Service::all();
    return response()->json($service, 200);
  }
}
