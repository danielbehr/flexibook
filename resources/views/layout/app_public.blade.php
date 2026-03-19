    <!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>flexibook.school</title>

<style>

body{
margin:0;
font-family: Arial, Helvetica, sans-serif;
background:#f6f8fb;
color:#333;
}

/* NAVBAR */

.navbar{
position:fixed;
top:0;
width:100%;
height:70px;
background:white;
display:flex;
align-items:center;
justify-content:space-between;
padding:0 40px;
box-shadow:0 2px 10px rgba(0,0,0,0.08);
z-index:1000;
}

.logo{
font-size:24px;
font-weight:bold;
}

.logo span:first-child{
color:#1c74d9;
}

.logo span:last-child{
color:#ff6a00;
}

.nav-links a{
margin-left:25px;
text-decoration:none;
color:#333;
font-weight:500;
}

.nav-links a:hover{
color:#1c74d9;
}

/* HERO */

.hero{
margin-top:70px;
padding:120px 10%;
display:flex;
align-items:center;
justify-content:space-between;
flex-wrap:wrap;
}

.hero-text{
max-width:550px;
}

.hero h1{
font-size:48px;
margin-bottom:20px;
}

.hero p{
font-size:20px;
margin-bottom:30px;
}

.cta{
background:#ff6a00;
color:white;
padding:14px 28px;
border-radius:6px;
text-decoration:none;
font-weight:bold;
}

/* FEATURES */

.features{
padding:80px 10%;
background:white;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:40px;
}

/* FEATURE KACHEL */

.feature{
position:relative;
padding:30px;
border-radius:10px;
background:#f1f5fb;
overflow:hidden;
cursor:pointer;
}

/* Animierter Hintergrund */

.feature::before{
content:"";
position:absolute;
inset:0;
background:#f1f5fb;
border-radius:10px;
z-index:0;
transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.feature:hover::before{
transform:scale(1.06);
box-shadow:0 12px 25px rgba(0,0,0,0.15);
}

/* Inhalt über Animation */

.feature *{
position:relative;
z-index:1;
}

.feature h3{
margin-top:0;
}

/* CTA SECTION */

.cta-section{
padding:100px 10%;
text-align:center;
background:#1c74d9;
color:white;
}

.cta-section a{
background:white;
color:#1c74d9;
padding:16px 32px;
border-radius:6px;
text-decoration:none;
font-weight:bold;
}

/* STICKY FOOTER */

.footer{
position:fixed;
bottom:0;
width:100%;
height:60px;
background:#222;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-size:14px;
z-index:1000;
}

.content-space{
height:60px;
}

</style>
</head>

<body>

<!-- NAVIGATION -->

<div class="navbar">

<div class="logo">
<span>flexi</span><span>book</span>
</div>

<div class="nav-links">
<a href="#">Start</a>
<a href="#">Funktionen</a>
<a href="#">Beispiele</a>
<a href="#">Preise</a>
<a href="#">Login</a>
</div>

</div>

<!-- HERO -->

<section class="hero">

<div class="hero-text">
<h1>Das flexible digitale Schulbuch</h1>

<p>
Lehrkräfte stellen ihr eigenes Schulbuch zusammen –
mit Kapiteln, Aufgaben und Materialien genau passend
für ihre Klasse.
</p>

<a class="cta" href="#">Jetzt ausprobieren</a>

</div>

<div>
<img src="logo.png" width="300">
</div>

</section>

<!-- FEATURES -->

<section class="features">

<div class="feature">
<h3>📚 Kapitel frei wählen</h3>
<p>
Lehrkräfte wählen nur die Inhalte, die sie wirklich brauchen.
</p>
</div>

<div class="feature">
<h3>🧩 Individuelle Lernpfade</h3>
<p>
Schulbücher können für verschiedene Klassen angepasst werden.
</p>
</div>

<div class="feature">
<h3>💻 Digital & interaktiv</h3>
<p>
Mit Aufgaben, Medien und automatischen Übungen.
</p>
</div>

<div class="feature">
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
