<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
    private $passwordPattern = "/^(?=.*\d)(?=.*[a-z]).{8,}$/";

    public function rules()
    {
        return [
            "username" => ["required", "min:8", "max:25", "unique:user", "regex:" . $this->usernamePattern],
            "email" => ["required", "regex:" . $this->emailPattern, "unique:user"],
            "password" => ["required", "regex:" . $this->passwordPattern],
            "confirmPassword" => "required|in:" . request()->input("password")
        ];
    }

    public function messages() {
        return [
            "confirmPassword.in" => "Your passwords don't match."
        ];
    }
}
