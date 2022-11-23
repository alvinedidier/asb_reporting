<?php

namespace App\Http\Controllers;

use App\Models\PackSmart;
use App\Http\Requests\StorePackSmartRequest;
use App\Http\Requests\UpdatePackSmartRequest;

class PackSmartController extends Controller
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
     * @param  \App\Http\Requests\StorePackSmartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackSmartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackSmart  $packSmart
     * @return \Illuminate\Http\Response
     */
    public function show(PackSmart $packSmart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackSmart  $packSmart
     * @return \Illuminate\Http\Response
     */
    public function edit(PackSmart $packSmart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackSmartRequest  $request
     * @param  \App\Models\PackSmart  $packSmart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackSmartRequest $request, PackSmart $packSmart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackSmart  $packSmart
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackSmart $packSmart)
    {
        //
    }
}
