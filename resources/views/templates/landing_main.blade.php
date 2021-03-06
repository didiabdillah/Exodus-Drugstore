<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="{{URL::asset('assets/img/favicon.ico')}}">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/aos.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/style.css') }}">

</head>

<body>

  <div class="site-wrap">
    <div class="site-navbar py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{  url('/') }}" class="js-logo-clone">Exodus Drugstore</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="@if(Request::segment(1) == NULL) {{'active'}} @endif"><a href="{{ url('/') }}">Home</a></li>
                <li class="@if(Request::segment(1) == 'etalase') {{'active'}} @endif"><a href="{{ url('etalase') }}">Etalase</a></li>
                <li>
                  @if(Request::session()->get('user_role'))
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{Request::session()->get('user_name')}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      @if(Request::session()->get('user_role') == 1)
                      <a class="dropdown-item" href="{{url('/dashboard')}}">Admin</a>
                      @endif
                      <a class="dropdown-item" href="{{url('/transaction')}}">Transaction</a>
                      <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                    </div>
                  </div>
                  @else
                  <a href="{{ url ('login') }}">Login</a>
                  @endif
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    @yield('page')

    <script src="{{ URL::asset('assets/landing/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/landing/js/aos.js') }}"></script>

    <script src="{{URL::asset('assets/landing/js/main.js')}}"></script>

</body>

</html>