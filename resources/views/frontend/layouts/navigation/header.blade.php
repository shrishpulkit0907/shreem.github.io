<header>
<nav class="navbar navbar-expand-lg" aria-label="Eleventh navbar example">
    <div class="container p-0">
      <a class="navbar-brand col-lg-1 col-6" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo wise gtp" class="img-fluid" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <img src="{{ asset('images/bars.png') }}" alt="logo wise gtp" class="img-fluid" />
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mb-3 mb-lg-0 ms-auto">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="{{url('/#')}}">About Us</a>
                  <a class="dropdown-item" href="{{url('/#')}}">Our Expert Team</a>
                  <a class="dropdown-item" href="{{url('/#')}}">Career</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Work</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                  <a class="dropdown-item" href="{{url('/#')}}">Portfolio</a>
                  <a class="dropdown-item" href="{{url('/#')}}">Testimonials</a>
                  <a class="dropdown-item" href="{{url('/#')}}">Client Stories</a>
                  <a class="dropdown-item" href="{{url('/#')}}">Case Studies</a>
                </div>
              </li>
            <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link">Industry Specification</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Our Packages</a></li>
            <li class="nav-item"><a href="{{ url('/contact-us') }}" class="nav-link">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
