<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
    <div class="container">
        <a href="/" class="navbar-brand">{{config('app.name','LSAPP')}}</a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#mobile-nav">
            <span class="navbar-toggle-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="mobile-nav">
            <ul class="navbar-nav ml-auto">
                <li class="active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="active">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <li class="active">
                    <a href="/services" class="nav-link">Services</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>