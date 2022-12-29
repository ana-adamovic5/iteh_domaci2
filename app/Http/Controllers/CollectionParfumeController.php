<?php

namespace App\Http\Controllers;

use App\Models\Parfume;
use Illuminate\Http\Request;

class CollectionParfumeController extends Controller
{
    public function index($collection_id)
    {

        $parfumes = Parfume::get()->where('collection_id', $collection_id);
        if (is_null($parfumes)) {
            return response()->json('Data not found', 404);
        }
        return response()->json($parfumes);
    }
}
