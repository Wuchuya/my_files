<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 5</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="http://labfile.oss.aliyuncs.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand hidden-sm" href="/">Laravel</a>
    </div>
    <ul class="nav navbar-nav navbar-right hidden-sm">
        <li>
            <a href="{{url('admin/register')}}" title="">注册</a>
        </li>
        <li>
            <a href="{{url('admin/login')}}" title="">登入</a>
        </li>
    </ul>
</div>
<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif
    @yield('content')
</div>
</body>
</html>