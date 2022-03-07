<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends ClientController
{
    public function login() {
        return view("pages.client.login", $this->data);
    }

    public function register() {
        return view("pages.client.register", $this->data);
    }

    public function doLogin(LoginUserRequest $request) {
        try {
            $email = $request->get("email");
            $password = $request->get("password");

            $userModel = new User();
            $user = $userModel->where("email", "=", $email);

            if(!$user || $user->password !== md5($password)) {
                $userId = $user != null ? $user->id : null;
                $this->logAction("User failed to log in.", $request, $userId);
                return redirect()->back()->withErrors(["Invalid credentials."]);
            }

            $request->session()->put("user", $user);

            $this->logAction("User logged in.", $request);

            return redirect()->route("home");
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(["We encountered an error.", 'Error ID: ' . $uniqueId]);
        }
    }

    public function doRegister(RegisterUserRequest $request) {
        try {
            $userModel = new User();
            $userId = $userModel->insert($request->get("username"), $request->get("email"), $request->get("password"), 1);

            $this->logAction("User registered themselves.", $request, $userId);

            return redirect()->route("form.login")->with(["email" => $request->get("email"), "messages" => ["Your account was created successfully. You can log in now."]]);
        } catch(Exception $e) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $e->getMessage());
            return redirect()->back()->withErrors(["We encountered an error. Please try again later.", 'Error ID: ' . $uniqueId]);
        }
    }

    public function logout(Request $request) {
        try {
            $userId = $request->session()->get("user")->id;
            $request->session()->remove("user");
            $this->logAction("User logged out.", $request, $userId);
        } catch(\Exception $e) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $e->getMessage());
        }

        return redirect()->back();
    }
}
