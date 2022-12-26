<?php

namespace App\Http\Controllers;

use App\Models\Parfume;
use Illuminate\Http\Request;

class ParfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parfumes = Parfume::all();
        return $parfumes;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function show(Parfume $parfume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function edit(Parfume $parfume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parfume $parfume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parfume $parfume)
    {
        //
    }
}
