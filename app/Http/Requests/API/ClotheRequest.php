<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ClotheRequest extends FormRequest
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
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image'
        ];
    }

    public function validated()
    {
        return array_merge([
           'user_id' => auth()->id()
        ], parent::validated());
    }
}
