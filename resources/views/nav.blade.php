<nav class="navbar navbar-inverse navbar-static-top" style="border-radius: 0; border-width: 0;padding: 0 15px ;margin: 0; font-size: larger;">
    <div class="navbar-header" >
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div style="padding-left: 0; text-transform: uppercase; letter-spacing: 3px; font-size: 20px;" class="navbar-brand">
            <a  href="{{ url('/') }}" style="text-decoration: none;color: white;">
                {{ config('app.name') }}
            </a>
        </div>

    </div>


    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right" style="letter-spacing: 1px;">
            <li>
                <a href="/" class="navbar-item">Home</a>
            </li>
            <li>
                <a href="#" class="navbar-item">About</a>
            </li>
            <li>
                <a href="/menu" class="navbar-item">Menu</a>
            </li>
            <li>
                <a href="/contact" class="navbar-item">Contact</a>
            </li>
            <li>
                <a href="/reservations" class="navbar-item">Reservations</a>
            </li>
            <li>
                <a href="#" class="navbar-item">Order
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
            </li>
            <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
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
</nav>
