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
            <div class="welcome">
                <h1>Welcome to <span class="dev-b">Dev<span class="dev-frame">Project</span></span></h1>
            </div>

            <div class="w-con-1">
                <div style="text-align: center;">
                    <h1>Lorem</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            @show
        </div>
    </div>

    @section('footer')
    <div class="footer-bttm">
    	<a href="#">Version 1.8</a>
        <p class="le-po"><a href="{{ url('https://laravel.com/') }}" target="_blank">Powered by Laravel</a></p>
    </div>
    @show
</body>
</html>
