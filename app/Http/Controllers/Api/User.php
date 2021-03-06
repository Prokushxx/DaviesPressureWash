<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class User extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return response()->json(ModelsUser::all());
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
    $data = $request->all();
    $validate = validator::make($data, [
      'name' => 'required',
      'email' => ['required', 'unique:users', 'email'],
      'telephone' => 'required',
      'address' => 'required',
      'password' => 'required',
    ], [
      'required' => '*Please fill out all fields',
      'unique' => '*Already Taken',
    ]);
    if ($validate->fails()) {
      return response()->json($validate->errors(), 202);
    } else {
      $data['password'] = bcrypt($data['password']);
      $createUser = User::create($data);

      return response()->json($createUser,200);
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
    $finddata = ModelsUser::findOrFail($id);
    return $finddata;
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
    $data = $request->input();
    $validation = validator::make($data, [
      'telephone' => 'min:10|max:10',
    ], [
      'min' => 'Must be 10 Digits',
      'max' => 'Must be 10 Digits'
  ]);

    if ($validation->fails()) {
      return response()->json($validation->errors(), 202);
    } else {
      $finddata = ModelsUser::findOrFail($id);
      $finddata->name = $request->input('name'); 
      $finddata->address = $request->input('address'); 
      $finddata->telephone = $request->input('telephone'); 
      $finddata->update();
      return response()->json($finddata);
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
    ModelUser::find($id)->delete();
    return response()->json('Delete Success',200);
  }
}
