<div class="top-right">
    <a href="/" class="logo-w">DevProject</a>
    @if (Session::has('logged'))
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/notification">Notification</a></li>
        </ul>
    @else
    <ul>
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    </ul>
    @endif
</div> 