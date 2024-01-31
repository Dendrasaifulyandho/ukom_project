<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>@yield('title')</title>
    @yield('header')
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <style>
   
  </style>
  </head>
  <body>

      <input type="checkbox" id="nav-toggle">
      <div class="sidebar">
        <div class="sidebar-brand">
          <h2><span class="las la-store-alt"></span> <span>Rentalin</span></h2>
        </div>

        <div class="sidebar-menu">
          <ul>
            <li>
              <a href="" class="active"><span class="las la-home"></span>
              <span>Dashboard</span></a>
            </li>
            <li>
              <a href=""><span class="las la-users"></span>
              <span>Pelanggan</span></a>
            </li>
            {{-- <li>
              <a href=""><span class="las la-clipboard-list"></span>
              <span>Projects</span></a>
            </li> --}}
            <li>
              <a href=""><span class="las la-shopping-bag"></span>
              <span>Pesanan</span></a>
            </li>
            <li>
              <a href=""><span class="las la-receipt"></span>
              <span>Mobil yang tersedia</span></a>
            </li>
            <li>
              <a href=""><span class="las la-comments"></span>
              <span>pesan pelanggan</span></a>
            </li>
            <li>
              <a href=""><span class="las la-user-circle"></span>
              <span>Akun</span></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-content">
        <header>
          <h2>
            <label for="nav-toggle">
              <span class="las la-bars"></span>
            </label>

            Rentalin
          </h2>

          <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="cari disini"/>
          </div>

          <div class="user-name">
            {{-- <div class="notification">
              <div class="notif"><i class="las la-bell"></i></div>
            </div> --}}
            <img src="{{ ('user-img1.avif') }}" width="45px" height="45px" alt="">
            <div>
              <h4>budi</h4>
              <small>Admin</small>
            </div>
            
          </div>

        </header>

        <div class="container">
          @yield('content')
        </div>

      </div>

  </body>
  <footer>
    @yield('footer')
  </footer>
</html>