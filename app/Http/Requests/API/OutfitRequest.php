<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class OutfitRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            // 'clothes.*' => 'required',
        ];
    }

    public function validated()
    {
        return array_merge([
           'user_id' => auth()->id()
        ], parent::validated());
    }
}
