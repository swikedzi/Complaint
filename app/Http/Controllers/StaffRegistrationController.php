<?php

namespace App\Http\Controllers;

use App\Models\staffRegistration;
use Illuminate\Http\Request;

class StaffRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('staff.add');
        }
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
     * @param  \App\Models\staffRegistration  $staffRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(staffRegistration $staffRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staffRegistration  $staffRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(staffRegistration $staffRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staffRegistration  $staffRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staffRegistration $staffRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staffRegistration  $staffRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(staffRegistration $staffRegistration)
    {
        //
    }
}
