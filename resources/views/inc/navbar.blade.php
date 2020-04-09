<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
    <div class="container">
        <a href="/" class="navbar-brand">{{config('app.name','LSAPP')}}</a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#mobile-nav">
            <span class="navbar-toggle-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="mobile-nav">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/services" class="nav-link">Services</a></li>
                <li><a href="/posts" class="nav-link">Blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                 
                    <ul>
                        <li><a href="/dashboard" class="nav-link">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="nav-link">
                            Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                   
                @endif
            </ul>
            
        </div>
    </div>
    </nav>