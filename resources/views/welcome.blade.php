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

    <!-- all this css styles move to _custom.scss file, this is only temporary here!! -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            margin: 0;
            min-height: 1900px;
        }
        .bottom-marketing{
            float: left;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .marketing-row{
            width: 85%;
            margin: 0 auto;
            display: flex;
            border-bottom: 1px solid lightgrey;
        }
        .marketing-users{
            width: 33%;
            margin: 9px;
            padding: 9px;
            float: left;
            text-align: center;
            transition: ease 0.5s;
        }
        .marketing-users:hover{
            transform: scale(1.1);
            transition: ease 0.5s;
        }
        .marketing-users img{
            width: 140px;
            height: 140px;
            margin-bottom: 10px;
            border-radius: 50%;
        }
        .vertical-border{
            width: 28.5%;
            height: 250px;
            display: flex;
            border-right: 2px solid lightgrey;
            margin-bottom: 50px;
        }
        .vertical-right-border{
            width: 70.8%;
            height: 250px;
            display: flex;
            border-right: 2px solid lightgrey;
            margin-bottom: 50px;
        }
        .connect-marketing{
            width: 85%;
            height: -webkit-fill-available;
            margin: 0 auto;
            display: flex;
            margin-bottom: 50px;
            transition: ease 0.5s;
        }
        .connect-marketing:hover{
            box-shadow: 0px 0px 4px -1px black;
            transition: ease 0.5s;
        }
        .header-connect{
            width: 50%;
            padding: 10px;
            border: 1px solid lightgrey;
        }
        .header-connect h1{
            font-size: 60px;
        }
        .header-connect small{
            position: sticky;
            top: 100%;
            left: 100%;
        }
        .footer-connect{
            width: 50%;
            /*padding: 10px;*/
        }
        .footer-connect img{
            max-width: 100%;
        }
        .middle-content{
            float: left;
        }
    </style>
</head>
<body>
    @section('content')

    <div class="wrapper">  
        @include('include.auth')
        <!-- change to unless so u can see div 'suc'!!! -->

        <div class="inner-wrapp" style="float: left;width: 100%;">
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
            <div class="bottom-marketing">
                <div class="marketing-row">
                    <div class="marketing-users">
                        <img src="https://cdn.lifehack.org/wp-content/uploads/2015/02/what-makes-people-happy.jpeg">
                        <h2>Katherine Kolms</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris  nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                    <div class="marketing-users">
                        <img src="https://www.newcastle.edu.au/__data/assets/image/0010/535906/varieties/sidebar_cal_thumb.jpg">
                        <h2>Rashad Singh</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                    <div class="marketing-users">
                        <img src="https://www.thestar.com/content/dam/thestar/columnist_logos/francis_angelyn_logo2020.jpg">
                        <h2>Emily Smith</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>
            <div class="middle-content">
                <div class="connect-marketing">
                    <div class="header-connect">
                        <h1>Connect with new people</h1>
                        <small>Maybe the <b style="color: red;">Opportunity</b> is just around the corner</small>
                    </div>
                    <div class="footer-connect">
                        <img src="https://cdn.lynda.com/course/711794/711794-637286245290490924-16x9.jpg">
                    </div>
                </div>
                <div class="vertical-border"></div>
                <div class="connect-marketing">
                    <div class="footer-connect">
                        <img src="https://bararassociates.com/wp-content/uploads/2019/03/recruitment-3942378_1920.jpg">
                    </div>
                    <div class="header-connect">
                        <h1>Chase your dream and find the perfect job</h1>
                        <small>Maybe the <b style="color: red;">Opportunity</b> is just around the corner</small>
                    </div>

                </div>
                <div class="vertical-right-border"></div>
                <div class="connect-marketing">
                    <div class="header-connect">
                        <h1>Like, comment or upload interesting content</h1>
                        <small>Maybe the <b style="color: red;">Opportunity</b> is just around the corner</small>
                    </div> 

                    <div class="footer-connect">
                        <img src="https://www.alexeko.com/wp-content/uploads/2020/05/Write-social-media-content-for-business.png">
                    </div>
                </div>
                
            </div>
        </div>
        @show
    </div>
</div>

@section('footer')
<div class="footer-bttm">
    <div>
        <div>
            <p style="text-align: center;">Copyright &copy; DevProject</p>
            <p class="le-po"><a href="{{ url('https://laravel.com/') }}" target="_blank">Powered by Laravel</a></p>
        </div>
    </div>
</div>
@show
</body>
</html>
