<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return response()->error(__('api.login-error'), 400);
        }

        $token = auth()->user()->createPlainTextToken();

        return response()->success(['user' => new UserResource(auth()->user()), 'token' => $token], __('api.login-success'));
    }

    public function destroy()
    {
        auth()->user()->tokens()->delete();

        return response()->success(message: __('api.logout-success'));
    }
}
