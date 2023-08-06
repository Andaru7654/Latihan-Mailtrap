<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDummyRequest;
use App\Http\Requests\UpdateDummyRequest;
use App\Models\Dummy;

class DummyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dummy $dummy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dummy $dummy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDummyRequest $request, Dummy $dummy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dummy $dummy)
    {
        //
    }
}
