<nav class="top-right">
  <a class="logo-w" href="/">DevProject</a>
    @if (Session::has('logged'))
      <ul>
          <li><a href="/users/account/<?php echo $req[0]->id ?>"><?php echo $req[0]->first_name; ?>  <?php echo $req[0]->last_name; ?></a></li>
          <li><a href="/home" class="<?php if($link_url == '/home') echo 'active'; ?>">Home</a></li>
          <li><a href="/about" class="<?php if($link_url == '/about') echo 'active'; ?>">About</a></li>
          <li><a href="/contact" class="<?php if($link_url == '/contact') echo 'active'; ?>">Contact</a></li>
          <li><a href="/messages" class="<?php if($link_url == '/messages') echo 'active'; ?>">Comments</a></li>
      </ul>
    @else
      <ul>
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
      </ul>
    @endif
</nav>