<?php

namespace App\Http\Controllers;

use App\Models\Insertion;
use App\Http\Requests\StoreInsertionRequest;
use App\Http\Requests\UpdateInsertionRequest;

class InsertionController extends Controller
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
     * @param  \App\Http\Requests\StoreInsertionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsertionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insertion  $insertion
     * @return \Illuminate\Http\Response
     */
    public function show(Insertion $insertion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insertion  $insertion
     * @return \Illuminate\Http\Response
     */
    public function edit(Insertion $insertion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsertionRequest  $request
     * @param  \App\Models\Insertion  $insertion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsertionRequest $request, Insertion $insertion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insertion  $insertion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insertion $insertion)
    {
        //
    }
}
