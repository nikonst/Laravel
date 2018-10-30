
    <nav class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/nikosapp/index') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                <ul class="nav navbar-nav "> <!-- mr-auto -->
                          <li class="nav-item active">
                            <a class="nav-link" href="/nikosapp/index">Index</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/nikosapp/home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/nikosapp/about">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/nikosapp/services">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/posts/index">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/nikosapp/message">Leave a Message</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/nikosapp/showMessages">Read Messages</a>
                          </li>
                  </ul>
                   <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/home">Home - Dashboard</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

