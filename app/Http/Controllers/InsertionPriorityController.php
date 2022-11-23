<?php

namespace App\Http\Controllers;

use App\Models\InsertionPriority;
use App\Http\Requests\StoreInsertionPriorityRequest;
use App\Http\Requests\UpdateInsertionPriorityRequest;

class InsertionPriorityController extends Controller
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
     * @param  \App\Http\Requests\StoreInsertionPriorityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsertionPriorityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsertionPriority  $insertionPriority
     * @return \Illuminate\Http\Response
     */
    public function show(InsertionPriority $insertionPriority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsertionPriority  $insertionPriority
     * @return \Illuminate\Http\Response
     */
    public function edit(InsertionPriority $insertionPriority)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsertionPriorityRequest  $request
     * @param  \App\Models\InsertionPriority  $insertionPriority
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsertionPriorityRequest $request, InsertionPriority $insertionPriority)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsertionPriority  $insertionPriority
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsertionPriority $insertionPriority)
    {
        //
    }
}
