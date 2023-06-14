<?php

namespace App\Http\Controllers;

use App\Models\MasterData;
use App\Http\Requests\StoreMasterDataRequest;
use App\Http\Requests\UpdateMasterDataRequest;

class MasterDataController extends Controller
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
     * @param  \App\Http\Requests\StoreMasterDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasterDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterData  $masterData
     * @return \Illuminate\Http\Response
     */
    public function show(MasterData $masterData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterData  $masterData
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterData $masterData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasterDataRequest  $request
     * @param  \App\Models\MasterData  $masterData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasterDataRequest $request, MasterData $masterData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterData  $masterData
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterData $masterData)
    {
        //
    }
}
