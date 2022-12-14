<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneNumberRequest;
use App\Http\Requests\UpdatePhoneNumberRequest;
use App\Models\PhoneNumber;

class PhoneNumberController extends Controller
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
     * @param  \App\Http\Requests\StorePhoneNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneNumber $phoneNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneNumber $phoneNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhoneNumberRequest  $request
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoneNumberRequest $request, PhoneNumber $phoneNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneNumber $phoneNumber)
    {
        //
    }
}
