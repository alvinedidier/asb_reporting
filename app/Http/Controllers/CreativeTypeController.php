<?php

namespace App\Http\Controllers;

use App\Models\CreativeType;
use App\Http\Requests\StoreCreativeTypeRequest;
use App\Http\Requests\UpdateCreativeTypeRequest;

class CreativeTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreCreativeTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreativeTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreativeType  $creativeType
     * @return \Illuminate\Http\Response
     */
    public function show(CreativeType $creativeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreativeType  $creativeType
     * @return \Illuminate\Http\Response
     */
    public function edit(CreativeType $creativeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreativeTypeRequest  $request
     * @param  \App\Models\CreativeType  $creativeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreativeTypeRequest $request, CreativeType $creativeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreativeType  $creativeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreativeType $creativeType)
    {
        //
    }
}
