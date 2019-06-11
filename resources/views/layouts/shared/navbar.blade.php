<!-- main banner -->
    <div class="main-top" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="header d-md-flex justify-content-between align-items-center py-3 pl-2">
                    <!-- logo -->
                    <div id="logo">
                        <h1><a href="{{ url('/') }}">Learning DIY Craft</a></h1>
                    </div>
                    <!-- //logo -->
                    <!-- nav -->
                    <div class="nav_w3ls">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li><a href="{{ url('/') }}" class="active nav-style">Home</a></li>
                                <li><a href="{{ route('about') }}" class="nav-style">About Us</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2 nav-style">Blog <span
                                            class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#" class="nav-style">Blog <span class="fa fa-angle-down"
                                            aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="{{ route('blog') }}" class="drop-text">Crochet</a></li>
                                        <li><a href="{{ route('blog') }}" class="drop-text">Stitches</a></li>
                                        <li><a href="{{ route('blog') }}" class="drop-text">Blankets & Sweaters</a></li>
                                        <li><a href="{{ route('blog') }}" class="drop-text">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}" class="nav-style">Contact Us</a></li>

                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}" target="_blank" class="nav-button">Login</a></li>
                                    <li><a href="{{ route('register') }}" target="_blank" class="nav-button">Register</a></li>
                                @else

                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2 nav-style">Blog <span
                                            class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#" class="nav-style">Blog <span class="fa fa-angle-down"
                                            aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
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
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                            <!-- //nav -->
                        </div>
                    </div>
                </header>
                <!-- //header -->