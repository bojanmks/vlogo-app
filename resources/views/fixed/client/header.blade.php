<div id="header" class="py-2 shadow">
    <div class="container d-flex align-items-center justify-content-between">
        <div id="logo" class="mt-2">
            <a href="{{ route("home") }}">
                <img src="{{ asset("assets/images/logo/logo.png") }}" alt="logo" class="img-fluid" />
            </a>
        </div>
        <nav id="nav" class="d-flex align-items-center">
            <ul class="d-flex me-4">
                @foreach($nav as $n)
                    <li>
                        <a href="{{ route($n->route) }}" class="p-2 @if(request()->routeIs($n->route)) active @endif">{{ $n->name }}</a>
                    </li>
                @endforeach
            </ul>
            @if(!session("user"))
                <a href="{{ route("form.login") }}" id="btnSignIn" class="px-3 py-2 rounded-pill shadow font-small">Sign in</a>
            @else
                <span id="userDivFront" class="font-small position-relative user-div p-1">{{ session("user")->username }}&nbsp;<i class="fas fa-caret-down"></i>
                <div id="userHoverMenu" class="position-absolute shadow rounded py-1">
                    <ul>
                        @if(session("user")->role_name == "admin")
                            <li>
                            <a href="{{ route("admin.dashboard") }}" class="px-1 py-2">Admin</a>
                        </li>
                        @endif
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" value="Log out" class="px-1 py-2"/>
                            </form>
                        </li>
                    </ul>
                </div>
                </span>
            @endif
            <span id="hamburgerMenu" class="ms-4 me-2">
                <a href="#" class="font-large">
                    <i class="fas fa-bars"></i>
                </a>
            </span>
        </nav>
    </div>
    <div id="sideNav">
        <ul class="d-flex flex-column">
            @foreach($nav as $n)
                <li>
                    <a href="{{ route($n->route) }}" class="d-block py-2 ps-3 ps-sm-5 @if(request()->routeIs($n->route)) active @endif">
                        {{ $n->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div id="sidenavCover" class="cover">
</div>
