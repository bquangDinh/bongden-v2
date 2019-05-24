<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('css/layouts/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/vendor/hamburgers.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    @yield('css')
  </head>
  <body>
    <!-- NAVIGATION BAR-->
    <div class="page-wrapper">
      <!-- For mobile -->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <button type="button" class="hamburger hamburger--spring js-hamburger">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>

        <nav class="navbar-mobile">
          <ul class="navbar-mobile__list list-unstyled">
            <li>
              <a href="/">TRANG CHỦ</a>
            </li>
            <li>
              <a href="/about_us">CHÚNG MÌNH</a>
            </li>
            <li>
              <a href="/articles">BÀI VIẾT</a>
            </li>
            <li>
              <a href="#">ẢNH</a>
            </li>
            <li>
              <a href="#">VONFRAM LAB</a>
            </li>
          </ul>
        </nav>
      </header>

      <!-- For desktop -->
      <aside class="d-none d-lg-block navbar-desktop">
        <nav class="navbar navbar-expand-sm">
          <ul class="navbar-nav" style="margin-left:20px;">
            <li class="nav-item">
              <a href="/" class="nav-link nav-btt">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a href="/about_us" class="nav-link nav-btt">Chúng mình</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link nav-btt">Vonfram Lab</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link nav-btt">Ảnh</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" style="margin-right:20px">
            <li class="nav-item">
              <button type="button" class="nav-right-item" id="search-btn">
                <i class="fas fa-search"></i>
              </button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-right-item">
                <i class="far fa-user"></i>
              </button>
            </li>
          </ul>
        </nav>
      </aside>

      <div id="search-field">
        <input type="text" id="search-field__content" placeholder="Search anything ..." spellcheck="false"/>
        <button type="button" id="search-field-close-btn">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="main-content">
        @yield('main-content')
      </div>

      <footer>

      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/layouts/main.js') }}"></script>
    @yield('js')
  </body>
</html>
