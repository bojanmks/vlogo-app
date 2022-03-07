<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
    private $namePattern = "/^[A-Z][a-z]{2,}(\s[a-zA-Z][a-z]{2,})*$/";

    public function rules()
    {
        return [
            "name" => [
                "required",
                "regex:" . $this->namePattern,
                Rule::unique('food_category')->ignore($this->category)
            ]
        ];
    }
}
