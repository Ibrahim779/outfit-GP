<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\RecommendRequest;
use App\Http\Resources\ClotheResource;
use App\Models\Category;
use App\Models\Clothe;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RecommendRequest $request)
    {
        $temp = 'Summer';
        if($request->temp < 20){
            $temp = 'Winter';
        }

        $category = Category::find($request->category_id)->name;

        $top = Clothe::whereUserId(auth()->id())
        ->where('category', 'LIKE', '%' . $temp  . '%')
        ->where('category', 'LIKE', '%' . $category . '%')
        ->where('category', 'LIKE', '%Top%')
        ->inRandomOrder()->first();

        $bottom = Clothe::whereUserId(auth()->id())
        ->where('category', 'LIKE', '%' . $temp  . '%')
        ->where('category', 'LIKE', '%' . $category . '%')
        ->where('category', 'LIKE', '%Bottom%')
        ->inRandomOrder()->first();

        return response()->success([
            $top ? new ClotheResource($top) : null, $bottom ? new ClotheResource($bottom) : null
        ]);
    }
}
