    <!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>flexibook.school</title>

</head>

<body>

<!-- NAVIGATION -->

<div class="navbar">

  <div class="logo">
    <span>flexi</span><span>book</span>
  </div>

  <!-- Hamburger -->
  <div class="menu-toggle" onclick="toggleMenu()">
    ☰
  </div>

  <div class="nav-links" id="navLinks">
    @yield('menu')
    <a href="#">Start</a>
    <a href="#">Funktionen</a>
    <a href="#">Beispiele</a>
    <a href="#">Preise</a>
    <a href="#">Login</a>
  </div>

</div>

<!-- HERO -->

@yield('body')

<!-- FOOTER -->

<div class="footer">
© 2026 flexibook.school – Digitales Schulbuch für Lehrkräfte
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
