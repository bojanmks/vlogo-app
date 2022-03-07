<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
    private $addressPattern = "/^[A-ZŠĐČĆŽ][a-zšđčćž]{2,}(\s[A-ZŠĐČĆŽa-zšđčćž][a-zšđčćž]{2,})*\s\d+[A-Z]?(\/\d+)*$/";

    public function rules()
    {
        return [
            'restaurantId' => 'required|exists:restaurant,id',
            'address' => ['required', 'regex:' . $this->addressPattern]
        ];
    }
}
