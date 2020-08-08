<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ItemController extends Controller
{
    public function getAllItems() : JsonResponse
    {
        return response()->json([
            'name' => 'item name'
        ]);
    }
}
