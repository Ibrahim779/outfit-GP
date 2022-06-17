<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CalendarRequest;
use App\Http\Resources\CalendarResource;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return response()->success(CalendarResource::collection(Calender::whereUserId(auth()->id())->get()));
    }

    public function show(Calender $calendar)
    {
        return response()->success(new CalendarResource($calendar));
    }

    public function store(CalendarRequest $request)
    {
        Calender::create($request->validated());

        return response()->success('Added successfully');
    }

    public function update(CalendarRequest $request, Calender $calendar)
    {
        $calendar->update($request->validated());

        return response()->success('Updated successfully');
    }

    public function destroy(Calender $calendar)
    {
        $calendar->delete();

        return response()->success('Deleted successfully');
    }
}
