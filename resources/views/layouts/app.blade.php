<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">

    <script src="/libs/jquery/jquery.js"></script>

    <link href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link href="/libs/fontawesome-free-web/css/all.min.css" rel="stylesheet">

    <script src="/libs/socket.io/socket.io.js"></script>

    <script src="/libs/axios/axios.js"></script>

    <link href="/assets/css/sidebars.css" rel="stylesheet">
    <script src="/assets/js/sidebars.js"></script>

    <link href="/assets/css/http-app.css" rel="stylesheet">
    <script src="/assets/js/http-app.js"></script>

    <script src="/assets/js/restapi-app.js"></script>

    <link href="/assets/css/file-upload-app.css" rel="stylesheet">
    <script src="/assets/js/file-upload-app.js"></script>

    <link href="/assets/css/websocket-app.css" rel="stylesheet">
    <script src="/assets/js/websocket-app.js"></script>
    <script src="/assets/js/websocket-err.js"></script>	
</head>
<body>
    <div class="container-fluid p-0 vh-100">
        <header class="p-5 bg-success text-white">
            <h1>php-web-socket-example</h1> 
            <p>Php + Jquery + Bootstrap + Laravel + RESTApi + Websocket ...</p> 
        </header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/assets/logo.svg" alt="Avatar Logo" style="width:40px;">
                </a>
                <ul class="navbar-collapse navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/hello">Hello</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $template }}" href="/template">Template</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $route }}" href="/route">Route</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $fileupload }}" href="/fileupload">FileUpload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $http }}" href="/http">HTTP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $restapi }}" href="/restapi">RESTApi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $login }}" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $dashboard }}" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
                @if ($username != NULL)
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
                            <strong>{{ $username }}</strong>
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0)">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>          
                        </ul>
                    </div>
                @elseif ($noneuser != NULL)
                    <button type="button" class="btn btn-secondary">
                        <a class="button is-primary" href="/login">
                            <strong>Login</strong>
                        </a>
                    </button>
                @endif
            </div>
        </nav>
        @yield('content')
        <footer class="bg-secondary fixed-bottom">
            contact me faco0909@outlook.com
        </footer>
    </div>
</body>
</html>
