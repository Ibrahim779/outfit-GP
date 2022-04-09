<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\CheckOtpRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class CheckOtpController extends Controller
{
    public function __invoke(CheckOtpRequest $request)
    {
        $user = User::wherePhone($request->phone)->first();

        if ($user->otp != $request->otp) {
            return response()->error(message: 'Incorrect otp');
        }

        $user->update([
            'otp' => null
        ]);

        return response()->success(message: 'Phone verified successfully');
    }
}
