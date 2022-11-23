<?php

namespace App\Http\Controllers;

use App\Models\PackSite;
use App\Http\Requests\StorePackSiteRequest;
use App\Http\Requests\UpdatePackSiteRequest;

class PackSiteController extends Controller
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
     * @param  \App\Http\Requests\StorePackSiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackSiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackSite  $packSite
     * @return \Illuminate\Http\Response
     */
    public function show(PackSite $packSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackSite  $packSite
     * @return \Illuminate\Http\Response
     */
    public function edit(PackSite $packSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackSiteRequest  $request
     * @param  \App\Models\PackSite  $packSite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackSiteRequest $request, PackSite $packSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackSite  $packSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackSite $packSite)
    {
        //
    }
}
