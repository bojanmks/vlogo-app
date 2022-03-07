<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
    private $emailPattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    private $passwordPattern = "/^(?=.*\d)(?=.*[a-z]).{8,}$/";

    public function rules()
    {
        return [
            "email" => ["required", "regex:" . $this->emailPattern],
            "password" => ["required", "regex:" . $this->passwordPattern]
        ];
    }
}
