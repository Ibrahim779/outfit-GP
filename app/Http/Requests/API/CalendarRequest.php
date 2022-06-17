<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CalendarRequest extends FormRequest
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
            'outfit_id' => ['exists:outfits,id', Rule::requiredIf(!$this->calendar)],
            'title' => ['min:3', 'max:255', Rule::requiredIf(!$this->calendar)],
            'date' => [Rule::requiredIf(!$this->calendar)],
            'time' => [Rule::requiredIf(!$this->calendar)],
        ];
    }

    public function validated()
    {
        return array_merge([
           'user_id' => auth()->id()
        ], parent::validated());
    }
}
