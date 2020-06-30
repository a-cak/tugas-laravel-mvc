<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\auth  $auth
     * @return \Illuminate\Http\Response
     */
    function sendReq(Request $request)
    {
        $fname=$request["fname"]; 
        $lname=$request["lname"]; 
        return view('welcome',$request);
    }
    function index()
    {
        return view('register');
    }
}
