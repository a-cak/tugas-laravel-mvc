<?php

namespace App\Http\Controllers;

use App\auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
        // dd($request->all());
        $fname=$request["fname"];
        return $fname;
        return view('welcome',$request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function show(auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(auth $auth)
    {
        //
    }
    // function index ()
    // {
    //     return view('register');
    // }
    // function registrasi(request $request)
    // {
    //     
    // }
}
