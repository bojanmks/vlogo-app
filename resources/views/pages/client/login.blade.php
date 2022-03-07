@extends("layouts.client")

@section("title")
    @parent | Login
@endsection

@section("content")
    <div class="section-padding vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <h2 class="text-center font-xl">Log in</h2>
            <form id="loginForm" class="font-small mx-auto" action="{{ route("login") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control font-small" id="email" name="email" placeholder="name@example.com" @if(session("email")) value="{{ session("email") }}" @endif/>
                    <span class="font-small error-message">name@example.com</span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control font-small" id="password" name="password" placeholder="Password"/>
                    <span class="font-small error-message">Your password needs to be at least 8 characters long and contain at least one letter and one number</span>
                </div>
                <button id="btnLogin" class="btn btn-primary text-center d-block mx-auto px-4">
                    Log in
                </button>
                <br/>
                <a class="signInFormLink" href="{{ route("form.register") }}" class="font-small">Don't have an account? Register instead.</a>
                @include("partials.messages")
            </form>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset("assets/js/form-validation.min.js") }}"></script>
    <script src="{{ asset("assets/js/login.min.js") }}"></script>
@endsection
