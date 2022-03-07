<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    private $usernamePattern = "/^(?=.*[a-z])[a-zA-Z0-9\_]{8,25}$/";
    private $emailPattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    private $passwordPattern = "/^((?=.*\d)(?=.*[a-z]).{8,})$/";

    public function rules()
    {
        return [
            "username" => ["required", "regex:" . $this->usernamePattern, "unique:user"],
            "email" => ["required", "regex:" . $this->emailPattern, "unique:user"],
            "password" => ["required", "regex:" . $this->passwordPattern],
            "role" => ["required", "exists:role,id"]
        ];
    }
}
