@extends("layouts.client")

@section("title")
    Vlogo | Contact
@endsection

@section("content")
    <div class="section-padding">
        <div class="container">
            <h2 class="text-center font-xl">Contact us</h2>
            <br/>
            <div class="row">
                <div class="col-12 col-lg-5">
                    <p class="font-small">
                        If you wish to reach out to us, you can do so via social media, the information listed below, or by filling out the contact form.
                    </p>
                    <br/>
                    <ul class="font-small">
                        <li>
                            <i class="fas fa-phone me-1"></i> +381 60/123-4567
                        </li>
                        <li>
                            <i class="fas fa-envelope me-1"></i> bojan.maxim075@gmail.com
                        </li>
                    </ul>
                    <hr class="d-block d-lg-none w-100 my-5"/>
                </div>
                <div class="col-12 col-lg-7">
                    <form id="contactForm" class="font-small mx-auto" action="{{ route("mail.contact") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control font-small" id="email" name="email" placeholder="name@example.com" value="{{ old("email") }}"/>
                            <span class="error-message font-small">name@example.com</span>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control font-small" id="subject" name="subject" placeholder="Subject" value="{{ old("subject") }}"/>
                            <span class="error-message font-small">This field is required</span>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control font-small" id="message" name="message" rows="10" placeholder="Your message" value="{{ old("message") }}"></textarea>
                            <span class="error-message font-small">This field is required</span>
                        </div>
                        <button id="btnSendMessage" class="btn btn-primary text-center d-block mx-auto px-4">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        @include("partials.messages")
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    @parent
    <script src="{{ asset("assets/js/form-validation.min.js") }}"></script>
    <script src="{{ asset("assets/js/contact.min.js") }}"></script>
@endsection
