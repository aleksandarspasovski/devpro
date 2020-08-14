@if (session()->has('logged'))
    return redirect()->back();
@endif
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">

    <title>@yield('title', 'DevProject')</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            margin: 0;
        }
    </style>
</head>
<body>
    @section('content')

    <div class="wrapper">  
        @include('include.auth')
        <!-- change to unless so u can see div 'suc'!!! -->

        <div class="inner-wrapp">
            @if(session('success'))
            <div class="suc">
                <div class="aler aler-succ">
                    <p class="succ-sing">{{session('success')}}</p>
                </div> 
            </div>
            @endif 

            @if(session('err'))
            <div class="warning">
                <div class="aler-warnig aler-succ">
                    <p class="err-sing">{{session('err')}}</p>
                </div> 
            </div>
            @endif

            <!--This has to be Welcome page -->
            <div class="welcome top">
                <a class="app-version" href="#">Version 1.8</a>
                <div class="welcome-box">
                    <h1>Welcome to DevProject</h1>
                </div>
            </div>
            <div class="welcome-bot">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            @show
        </div>
    </div>

    @section('footer')
    <div class="footer-bttm">
        <p class="le-po"><a href="{{ url('https://laravel.com/') }}" target="_blank">Powered by Laravel</a></p>
    </div>
    @show
</body>
</html>
