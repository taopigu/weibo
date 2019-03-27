<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') - laravel入门</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    @include("layouts._header")
    <div class="container" style="padding-top: 30px">
        @yield('content')

        @include("layouts._footer")
    </div>
</body>
</html>

