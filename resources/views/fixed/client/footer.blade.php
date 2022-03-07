<div id="footer" class="py-3">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <ul id="socials" class="d-flex">
            @foreach($socials as $s)
                <li>
                    <a href="{{ $s->asset ? asset($s->href) : $s->href }}" target="_blank" class="p-1">
                        <i class="{{ $s->icon }}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
        <span class="font-small mt-2">&copy; 2022 Bojan Maksimović. All rights reserved.</span>
    </div>
</div>
