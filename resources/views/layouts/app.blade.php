<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>website2</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">

    <script src="{{ asset('asset/bootstrap/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('asset/bootstrap/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}" defer></script>

    
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a class="navbar-brand" href="lamanutama">
        <img src={{ asset('img/logo.png') }} alt="logo" style="width:35px;">
        &nbsp; Website2
      </a>
      <br><br>
      <a href="lamanutama">Laman Utama</a>
      <a href="servis">Servis</a>
      <a href="hubungikami">Hubungi Kami</a>  
    </div>
    
    <div id="main">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>

    <main class="py-1">
        @yield('content')
        <br><br><br><br><br><br><br>
    </main>

    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Website1. Hakcipta Terpelihara.
          <br>
          Cheras, Kuala Lumpur
          <br>
          Ibu Pejabat Kami :
          <a href="https://www.lakarancintasistem.com/"> lakarancintasistem.com</a>
          <br>
          Whatsapp :
          <a href="http://www.wasap.my/601110514029/I'MPROGRAMMERLOVEYOURHEARTS"> 01110514029-admin</a>
          <br>
          Link rasmi Kami :
          <a href="https://www.lakarancintasistem.com/"> lakarancintasistem.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
       
</body>
</html> 
    