<?php

namespace App\Http\Controllers;

use App\Models\complainCategory;
use Illuminate\Http\Request;

class ComplainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('category.add');
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
     * @param  \App\Models\complainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(complainCategory $complainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(complainCategory $complainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complainCategory $complainCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(complainCategory $complainCategory)
    {
        //
    }
}
