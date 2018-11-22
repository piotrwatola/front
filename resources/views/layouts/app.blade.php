<html>
<head>
    <title>Senetic</title>
    <link href="/../../fonts/OpenSans-Regular.ttf" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="/../../css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/../../css/style.css" />

</head>
<body>

<div class="container">
    <div class="container bg-light">
        <div class="row">
            <div class="col">
                <p class="text-secondary">
                </p>
            </div>
            <div class="col text-sm-right" style="margin: 10px 0 10px 0;">
                @if(auth()->check())
                    <a href="/users/index">
                        <button type="submit" class="btn btn-outline-dark">Home</button>
                    </a>
                    <a href="/auth/logout">
                        <button type="submit" class="btn btn-dark">Wyloguj się</button>
                    </a>
                @else
                    <a href="/">
                        <button type="submit" class="btn btn-outline-dark">Zaloguj się</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="container bg-light">
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Selenic, Katowice, Kościuszki, 20.11.2018r.</p>
        <hr class="my-4">
        @component('alert')
        @endcomponent
        @yield('content')
    </div>
</div>

</body>
</html>