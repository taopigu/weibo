<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') - laravel入门</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/" title="">Weibo App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="/help" title="">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="#" title="">登陆</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

