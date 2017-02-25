<!DOCTYPE html>
<html>
<head>
    <title>My Gallery App</title>
    <link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css')) }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/lightbox.min.css') }}">
    <script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
    </script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h5><a class="navbar-brand" href="{{ url('/') }}">Galleries App</a></h5>
                </div>
                <ul class="nav navbar-nav">
                    <li class=""><a class="btn" href="{{ url('/') }}">Login</a></li>
                    <li><a class="btn" href="{{ url('gallery/list') }}">Galleries List</a></li>
                    @if(Auth::check())
                        <li class="pull-right">
                            <a class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : 'User' }}}  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('gallery/list') }}">My Galleries</a></li>
                                <li><a href="{{ url('user/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </nav>



        @if(Session::has('flash_error'))

            <div class="alert alert-danger" >
                {!! Session::get('flash_error') !!}
            </div>
        @endif

        @if(Session::has('flash_message'))
            <div class="alert alert-success" >
                {!! Session::get('flash_message') !!}
            </div>
        @endif

        @yield('content')

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
    <script type="text/javascript" src="{{ url(elixir('js/all.js')) }}"></script>
    <script type="text/javascript" src="{{ secure_asset('js/lightbox.min.js') }}"></script>
</body>
</html>