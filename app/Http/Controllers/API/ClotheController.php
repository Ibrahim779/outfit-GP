<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ClotheRequest;
use App\Http\Resources\ClotheResource;
use App\Models\Clothe;
use Illuminate\Http\Request;

class ClotheController extends Controller
{
    public function index()
    {
        return response()->success(ClotheResource::collection(Clothe::whereUserId(auth()->id())->get()));
    }

    public function store(ClotheRequest $request)
    {
        Clothe::create($request->validated());

        return response()->success(message: "Added to your clothes successfully");
    }
}
