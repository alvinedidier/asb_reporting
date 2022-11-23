<?php

namespace App\Http\Controllers;

use App\Models\InsertionStatus;
use App\Http\Requests\StoreInsertionStatusRequest;
use App\Http\Requests\UpdateInsertionStatusRequest;

class InsertionStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreInsertionStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsertionStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsertionStatus  $insertionStatus
     * @return \Illuminate\Http\Response
     */
    public function show(InsertionStatus $insertionStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsertionStatus  $insertionStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(InsertionStatus $insertionStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsertionStatusRequest  $request
     * @param  \App\Models\InsertionStatus  $insertionStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsertionStatusRequest $request, InsertionStatus $insertionStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsertionStatus  $insertionStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsertionStatus $insertionStatus)
    {
        //
    }
}
