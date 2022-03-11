<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        User::create($request->validated());

        return response()->success(message: __('api.register-successfuly'));
    }
}
