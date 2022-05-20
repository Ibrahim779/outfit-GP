<?php

namespace App\Http\Requests\API\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|unique:users,phone,except,id',
            'name' => 'required|string|min:3|max:255',
            'lat' => 'required|string|min:3|max:255',
            'long' => 'required|string|min:3|max:255',
            'avatar' => 'nullable|image|mimes:png,jpg|size:5000'
        ];
    }
}
