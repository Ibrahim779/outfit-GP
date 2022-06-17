<?php

namespace App\Http\Requests\API\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'phone' => Rule::unique('users')->ignore(auth()->id()),
            'name' => 'string|min:3|max:255',
            'lat' => 'string|min:3|max:255',
            'long' => 'string|min:3|max:255',
            'avatar' => 'nullable|image|mimes:png,jpg|size:5000'
        ];
    }
}
