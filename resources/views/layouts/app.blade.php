<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/public/app.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/milligram.min.css')}}">
    <link rel="stylesheet" href="{{url('/app.css')}}">
    <title>
        @yield('title')
    </title>
</head>
<body>

<div>

    @yield('content')

</div>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>