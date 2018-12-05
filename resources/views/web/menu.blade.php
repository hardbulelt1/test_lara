
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">{{ __('messages.news') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('gallery') }}">{{ __('messages.gallery') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/news') }}">{{ __('messages.admin') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
