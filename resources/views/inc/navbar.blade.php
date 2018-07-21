  <div class="navbar-fixed">
    <nav class="blue lighten-2">
      <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">{{config('app.name', 'Laravel MaterializeCSS Blog')}}</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/home">Home</a></li>
          <li><a href="/posts">Posts</a></li>          
          @guest  
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
           @else
           <li><a href="/posts/create">Create</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          @endguest           
        </ul>
      </div>
    </div>
    </nav>
  </div>