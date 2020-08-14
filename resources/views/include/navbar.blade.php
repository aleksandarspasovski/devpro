
  <nav class="top-right">
    <a class="logo-w" href="/">DevProject</a>
      @if (Session::has('logged'))
        <ul>
              <li><a href="/users/account/<?php echo $req[0]->id ?>?feeds"><?php echo $req[0]->first_name; ?>  <?php echo $req[0]->last_name; ?></a></li>
              <li><a href="/home" class="<?php if($link_url == '/home') echo 'active'; ?>">Home</a></li>
              <!-- change about controller into job and delete Jobs page -->
              <li><a href="/about?<?php echo hash('sha1', 'wqdwada12312D2t'); ?>&u_id=<?php echo $req[0]->id ?>" class="<?php if($link_url == '/about') echo 'active'; ?>">Jobs</a></li>
              <li><a href="/notifications" class="<?php if($link_url == '/notifications') echo 'active'; ?>">Notifications</a></li>
              <!-- <li><a href="/messages" class="<?php if($link_url == '/messages') echo 'active'; ?>">Comments</a></li> -->
              <li><a href="/jobs" class="<?php if($link_url == '/jobs') echo 'active'; ?>">About</a></li>
        </ul>
      @else
        <ul>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>
      @endif
  </nav>
