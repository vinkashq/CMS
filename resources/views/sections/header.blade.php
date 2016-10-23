<header class="v-header clearfix">
  <div class="wrap">
    <div class="contents clearfix">
      <div class="title">
        <a href="/">
          @if(config('design.logo_url.default'))
            <img src="{{ config('design.logo_url.default') }}" alt="{{ config('app.name') }}" id="site-logo" class="logo-big">
          @else
            <h2 id="site-text-logo" class="text-logo">{{ config('app.name') }}</h2>
          @endif
        </a>
      </div>
      <div class="panel clearfix">
        <span>
          @if (Route::has('login'))
              @if (Auth::check())
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a class="widget-button btn-primary btn-sm sign-up-button" href="{{ url('/register') }}">Sign Up</a>
                  <a class="widget-button btn-primary btn-sm login-button" href="{{ url('/login') }}">
                    <i class="fa fa-user"></i>
                    Log In
                  </a>
              @endif
          @endif
        </span>
        <ul role="navigation" class="icons clearfix">
          <li class="header-dropdown-toggle dropdown">
            <a title="go to another page" aria-label="go to another page" id="toggle-hamburger-menu" class="icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
              <i class="fa fa-bars"></i>
            </a>
            <div class="menu-panel dropdown-menu dropdown-menu-right" aria-labelledby="toggle-hamburger-menu">
              <ul class="menu-links columned">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
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
