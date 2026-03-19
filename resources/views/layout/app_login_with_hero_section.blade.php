@extends('layout.app')

<section class="hero">

<div class="hero-text">
<h1>@yield('hero_heading')</h1>

<p>
    @yield('hero_content')
</p>


</section>

<!-- boxes -->

<section class="boxes">

<div class="box">
<h3>📚 Kapitel frei wählen</h3>
<p>
Lehrkräfte wählen nur die Inhalte, die sie wirklich brauchen.
</p>
</div>

<div class="box">
<h3>🧩 Individuelle Lernpfade</h3>
<p>
Schulbücher können für verschiedene Klassen angepasst werden.
</p>
</div>

<div class="box">
<h3>💻 Digital & interaktiv</h3>
<p>
Mit Aufgaben, Medien und automatischen Übungen.
</p>
</div>

<div class="box">
<h3>⚡ Schnell erstellt</h3>
<p>
In wenigen Minuten ein individuelles Schulbuch zusammenstellen.
</p>
</div>

</section>

<!-- CALL TO ACTION -->

<section class="cta-section">

<h2>Starte dein erstes flexibook</h2>

<p>
Erstelle in wenigen Minuten dein eigenes digitales Schulbuch.
</p>

<br>

<a href="#">Kostenlos starten</a>

</section>

<div class="content-space"></div>

<!-- FOOTER -->

<div class="footer">
© 2026 flexibook.school – Digitales Schulbuch für Lehrkräfte
</div>

</body>
</html>
