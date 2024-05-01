<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url("index.html") }}">Blog Publisher</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="{{ url("index.html") }}" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url("#hero") }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#about") }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#services") }}">Services</a></li>
          <li><a class="nav-link scrollto " href="{{ url("#portfolio") }}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ url("#team") }}">Team</a></li>
          <li><a href="{{ url("blog.html") }}">Blog</a></li>
          <li class="dropdown"><a href="{{ url("#") }}"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url("#") }}">Drop Down 1</a></li>
              <li class="dropdown"><a href="{{ url("#") }}"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url("#") }}">Deep Drop Down 1</a></li>
                  <li><a href="{{ url("#") }}">Deep Drop Down 2</a></li>
                  <li><a href="{{ url("#") }}">Deep Drop Down 3</a></li>
                  <li><a href="{{ url("#") }}">Deep Drop Down 4</a></li>
                  <li><a href="{{ url("#") }}">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="{{ url("#") }}">Drop Down 2</a></li>
              <li><a href="{{ url("#") }}">Drop Down 3</a></li>
              <li><a href="{{ url("#") }}">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url("#contact") }}">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ url("login") }}">Login</a></li>
          <li><a class="nav-link scrollto" href="{{ url("ragistration") }}">Ragistration</a></li>
          <li><a class="getstarted scrollto" href="{{ url("#about") }}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->