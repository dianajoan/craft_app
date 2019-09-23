<body data-spy="scroll" data-target="#navbar" data-offset="50" >
  <nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" target="_blank" title="my Website"><img src="https://i.ibb.co/XynTSFb/craftlogo.jpg" alt="Craft Logo" style="border-radius: 10px; width: 35px; height: 35px;"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="#home" class="hash">

              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>

            </li>
            <li><a href="#about" class="hash">

              <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a>

            </li>
            <li><a href="#portfolio" class="hash">

              <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Blog</a>

            </li>
            <li><a href="#links" class="hash">

              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a>

            </li>
            <li><a href="#" class="hash">

              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}</a>

            </li>
            <li><a href="{{ route('logout') }}" class="hash" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
              <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Logout</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>
</body>