<?php

namespace App\Http\Controllers\API\Auth;

use App\Events\Verification;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        event(new Verification($user));

        return response()->success(data:['otp' => $user->otp], message: 'Register successfully');
    }
}
