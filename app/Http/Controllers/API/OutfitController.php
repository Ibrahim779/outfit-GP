<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\OutfitRequest;
use App\Http\Resources\ClotheResource;
use App\Http\Resources\OutfitResource;
use App\Models\Category;
use App\Models\Clothe;
use App\Models\Outfit;
use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function index()
    {
        return response()->success(OutfitResource::collection(Outfit::with('clothes')->whereUserId(auth()->id())->get()));
    }

    public function show(Outfit $outfit)
    {
        return response()->success(new OutfitResource($outfit));
    }

    public function store(OutfitRequest $request)
    {
        $outfit = Outfit::create($request->validated());
        
        $outfit->clothes()->sync($request->clothes);
        
        return response()->success(message: "Added to your outfit successfully");
    }
}
