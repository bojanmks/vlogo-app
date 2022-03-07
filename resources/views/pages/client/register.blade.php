@extends("layouts.client")

@section("title")
    @parent | Register
@endsection

@section("content")
    <div class="section-padding vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <h2 class="text-center font-xl">Register</h2>
            <form id="registerForm" class="font-small mx-auto" action="{{ route("register") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control font-small" id="username" name="username" placeholder="Username" maxlength="25" value="{{ old("username") }}"/>
                    <span class="font-small error-message">Your username cannot contain special characters other than '_', must contain at least one alphabetical character and be between 8 and 25 characters long</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control font-small" id="email" name="email" placeholder="name@example.com" value="{{ old("email") }}"/>
                    <span class="font-small error-message">name@example.com</span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control font-small" id="password" name="password" placeholder="Password"/>
                    <span class="font-small error-message">Your password needs to be at least 8 characters long and contain at least one letter and one number</span>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm password</label>
                    <input type="password" class="form-control font-small" id="confirmPassword" name="confirmPassword" placeholder="Confirm password"/>
                    <span class="font-small error-message">Your passwords don't match</span>
                </div>
                <button id="btnRegister" class="btn btn-primary text-center d-block mx-auto px-4">
                    Register
                </button>
                <br/>
                <a class="signInFormLink" href="{{ route("form.login") }}" class="font-small">Already have an account? Log in instead.</a>
                @include("partials.messages")
            </form>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset("assets/js/form-validation.min.js") }}"></script>
    <script src="{{ asset("assets/js/register.min.js") }}"></script>
@endsection
