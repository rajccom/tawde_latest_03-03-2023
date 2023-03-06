<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Astrology;
use Validator;
Use Redirect;

class AstrologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         $this->rules = [
             'time_of_birth'    => [ 'max:10'],
             'city_of_birth'    => [ 'max:20'],
         ];
         $this->messages = [
             'time_of_birth.max'  => translate('Max 10 characters'),
             'city_of_birth.max'  => translate('Max 20 characters'),
         ];

         $rules = $this->rules;
         $messages = $this->messages;
         $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
             flash(translate('Something went wrong'))->error();
             return Redirect::back()->withErrors($validator);
         }

         $astrologies = Astrology::where('user_id', $id)->first();
         if(empty($astrologies)){
             $astrologies           = new Astrology;
             $astrologies->user_id  = $id;
         }

         $astrologies->time_of_birth    = $request->time_of_birth;
         $astrologies->city_of_birth    = $request->city_of_birth;

         if($astrologies->save()){
             flash(translate('Astronomic Info has been updated successfully'))->success();
             return back();
         }
         else {
             flash(translate('Sorry! Something went wrong.'))->error();
             return back();
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
    }
}
