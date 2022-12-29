<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParfumeCollection;
use App\Http\Resources\ParfumeResource;
use App\Models\Parfume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return new ParfumeCollection($parfumes);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'string',
            'gender' => 'string',
            'size' => 'integer',
            'price' => 'integer',
            'collection_id' => 'integer',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $parfume = Parfume::create([
            'name' => $request->name,
            'type' => $request->type,
            'gender' => $request->gender,
            'size' => $request->size,
            'price' => $request->price,
            'collection_id' => $request->collection_id,
        ]);

        return response()->json(['Parfume created successfully.', new ParfumeResource($parfume)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function show(Parfume $parfume)
    {
        return new ParfumeResource($parfume);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'type' => 'string',
            'gender' => 'string',
            'size' => 'integer',
            'price' => 'integer',
            'collection_id' => 'integer',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $parfume->name = $request->name;
        $parfume->type = $request->type;
        $parfume->gender = $request->gender;
        $parfume->size = $request->size;
        $parfume->price = $request->price;
        $parfume->collection_id = $request->collection_id;

        $parfume->save();

        return response()->json(['Parfume updated successfully.', new ParfumeResource($parfume)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parfume  $parfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parfume $parfume)
    {
        $parfume->delete();
        return response()->json('Parfume deleted successfully.');
    }
}
