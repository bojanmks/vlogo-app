@extends("layouts.client")

@section("title")
    @parent | Author
@endsection

@section("content")
    <div class="section-padding min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center">
                    <div id="authorImage" class="text-center">
                        <img src="{{ asset("assets/images/author/author.jpg") }}" alt="Author image" class="d-inline-block img-fluid rounded-circle"/>
                    </div>
                    <span class="mt-3 font-medium">Bojan Maksimović 92/19</span>
                    <span class="font-small opacity-75">Web Developer</span>
                </div>
                <div class="col-12 col-lg-7 d-flex align-items-center align-items-lg-start justify-content-center flex-column mt-3 text-center text-lg-start">
                    <br class="d-block d-lg-none"/>
                    <h2 class="font-large">About me</h2>
                    <hr class="w-100 mt-0"/>
                    <br/>
                    <p class="font-small">Hello! I am Bojan, an aspiring back-end web developer. I'm a driven individual with the ability to learn and collaborate in rapidly changing environments and compositions. I am eager to tackle web development challenges to achieve lasting impacts on user experience.</p>
                    <div id="authorSocials" class="mx-auto mx-lg-0">
                        <ul class="d-flex">
                            @foreach($authorSocials as $as)
                                <li>
                                    <a href="{{ $as->asset ? asset($as->href) : $as->href }}" target="_blank" class="rounded me-1 font-small d-flex align-items-center justify-content-center"><i class="{{ $as->icon }}"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a id="portfolioLink" href="http://wd2.bojanmaksimovic.com/" target="_blank" class="py-2 mt-2">Portfolio Website</a>
                </div>
            </div>
        </div>
    </div>
@endsection
