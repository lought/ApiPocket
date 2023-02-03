<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovementsRequest;
use App\Http\Resources\MovementsResource;
use App\Models\Movements;
use Illuminate\Http\Request;

class MovementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = Movements::all();
        return MovementsResource::collection($movements);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movements = Movements::create($request->all());
        
        return new MovementsResource($movements);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movements  $movements
     * @return \Illuminate\Http\Response
     */
    public function show(Movements $movements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movements  $movements
     * @return \Illuminate\Http\Response
     */
    public function edit(Movements $movements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movements  $movements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movements $movements)
    {
        $movements->update($request->all());
        
        return new MovementsResource($movements);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movements  $movements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movements $movements)
    {
        $movements->delete();

        return response(null, 204);
    }
}