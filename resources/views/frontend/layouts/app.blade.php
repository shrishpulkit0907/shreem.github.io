<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/x-icon" href="{{asset('images/icon.jpeg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="{{ asset('css/app/frontend/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app/frontend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app/frontend/mobile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <div class="col-12 greentheme">
        <main>
            @include('frontend.layouts.navigation.header')
            @yield('maincontent')
            @include('frontend.layouts.navigation.footer')
        </main>
    </div>
    <script src="{{ asset('js/app/frontend/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: true,
                dotsData: true,
                onInitialized: startProgressBar,
      onTranslate: resetProgressBar,
      onTranslated: startProgressBar,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });

     function startProgressBar() {
      // apply keyframe animation
      $(".owl-carousel .owl-dot.active .slide-progress").css({
        width: "100%",
        transition: "width 10000ms"
      });
    }

    function resetProgressBar() {
      $(".owl-carousel .owl-dot .slide-progress").css({
        width: 0,
        transition: "width 0s"
      });
    }
    //Init progressBar where elem is $("#owl-demo")
    function progressBar(elem){
      $elem = elem;
      //build progress bar elements
      buildProgressBar();
      //start counting
      start();
    }
        });

        $(document).ready(function(){
            $(".owl-carousel2").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: false,
                items: 3,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

        $(document).ready(function(){
            $(".owl-carousel3").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: false,
                items: 6,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 6
                    },
                    1000: {
                        items: 6
                    }
                }
            });
            $(".owl-carousel4").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: false,
                items: 6,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $(".owl-carousel5").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: false,
                items: 6,
                responsive: {
                    0: {items: 1},
                    600: {items: 1},
                    1000: {items: 1}
                }
            });
        });
    </script>
    @stack('script')
</body>
</html>
