<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFoodRequest extends FormRequest
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
    private $pricePattern = "/^(?=.+)(?:[1-9]\d*)?(?:(\.\d+)|(0\.\d*[1-9]+\d*))?$/";

    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('food')->where(function($query) {
                return $query->where('restaurant_id', request()->get('restaurant'));
            })],
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
            'restaurant' => 'required|exists:restaurant,id',
            'category' => 'required|exists:food_category,id',
            'price' => ['required', 'regex:' . $this->pricePattern]
        ];
    }
}
