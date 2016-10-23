<header class="v-header clearfix">
  <div class="wrap">
    <div class="contents clearfix">
      <div class="title">
        <a href="/">
          <h2 id="site-text-logo" class="text-logo">{{ config('app.name') }}</h2>
        </a>
      </div>
      <div class="panel clearfix">
        <span>
          @if (Route::has('login'))
              @if (Auth::check())
                  <a class="widget-button btn-primary btn-sm" href="{{ url('/home') }}">Home</a>
              @else
                  <a class="widget-button btn-primary btn-sm sign-up-button" href="{{ url('/register') }}">Register</a>
                  <a class="widget-button btn-primary btn-sm login-button" href="{{ url('/login') }}">Login</a>
              @endif
          @endif
        </span>
        <ul role="navigation" class="icons clearfix">
          <li class="header-dropdown-toggle">
            <a data-auto-route="true" title="go to another page" aria-label="go to another page" id="toggle-hamburger-menu" class="icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
          </li>
          @if (Route::has('login'))
              @if (Auth::check())
                <li id="current-user" class="header-dropdown-toggle current-user">
                  <a href="" data-auto-route="true" class="icon">
                    <div>
                      <img alt="" width="32" height="32" src="" title="" class="avatar">
                    </div>
                  </a>
                </li>
              @endif
          @endif
        </ul>
      </div>
    </div>
  </div>
</header>
