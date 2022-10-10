<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#applicationNavbar"
                aria-controls="applicationNavbar" aria-expanded="false" aria-label="{{ __('app.navbar.toggle_navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="applicationNavbar">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('app.auth.login') }}</a>
                        </li>
                    @endif

                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('app.auth.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <x-link class="dropdown-item" href="{{route('dashboard.index')}}" :label="__('app.pages.dashboard.title')"></x-link>
                            </li>
                            <li>
                                <x-link class="dropdown-item" href="{{route('profile.index')}}" :label="__('app.pages.profile.title')"></x-link>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <x-link class="dropdown-item" href="{{route('dashboard.secret')}}" :label="__('Secret')"></x-link>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <x-link id="auth-logout" class="dropdown-item" :label="__('app.auth.logout')"></x-link>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
