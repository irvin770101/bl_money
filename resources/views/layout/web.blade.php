<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>懶記帳</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{elixir('css/app.css')}}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>          
    @yield('pre-scripts')    
</head>

<body>

    <!--頁首-->
    @include('layout.web.header')    
    
    <!--內容-->
    @yield('content')
    
    <!--頁尾-->
    @include('layout.web.footer')    
    @yield('post-scripts')
</body>

</html>
