<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\UpdateProfileRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update($request->validated());

        return response()->success(new UserResource($user), message: "Profile Updated successfully");
    }
}
