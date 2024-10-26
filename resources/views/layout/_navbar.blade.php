<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Logis</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{url('/')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home<br></a></li>
        <li class="dropdown"><a href="#" class="{{ request()->routeIs('Pdf-to-Word') ? 'active' : '' }}"><span>@yield('file')</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{url('Pdf-to-Word')}}">PDF to Word</a></li>
            <li><a href="#">Word to PDF</a></li>
            <li><a href="#">img to jpg</a></li>
            <li><a href="#">jpg to img</a></li>
          </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>