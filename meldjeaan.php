<?php include 'contactform.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Meld je aan!</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="vid">
<video src="vid/background.mp4" autoplay muted loop class="vid2" autoplay="autoplay">
</video>
</div>

<div class="headerdiv">
  <div>
  <h1><br><br><br><span class="tit"><a href="#site"><span class="pink">M</span>eld je aan!</a><span href="metjeaan"class="pijl"> ►</span></span><br></h1>
 
</div>
</div>

<section id="site">
<nav id="myHeader">
  <ul class="center">
  <li><a class="font2" href="index.html">Home</a></li>
  <li><a class="font2" href="indepratijk.html">In de Praktijk</a></li>
  <li><a class="font2" href="Overma.html">Over ma</a></li>
  <li><a class="active font2">Meld je Aan!</a></li>
  <li><a class="font2" href="contact.php">Contact</a></li>
</ul>
</nav>

<div class="wrapper content">
  <a class="groter font2 center"><span class="mhead">Wat is <span class="pink">M</span>a</span><br><br>

  Goed dat je kiest voor een opleiding bij het Mediacollege Amsterdam! Met de opleiding die je nu kiest, kun je straks de media van morgen maken. Welke opleiding je ook kiest, Ma doet er alles aan om te zorgen dat je straks met een diploma aan de slag kunt.<br><br>

  Voor studiejaar 2020-2021 kun je je aanmelden vanaf 1 oktober 2019.<br><br><br>

<span class="mhead"><span class="pink">T</span>oelatingsprocedure mbo 2020-2021</span><br><br>

  Het Mediacollege Amsterdam krijgt meer aanmeldingen dan we studenten kunnen plaatsen. Daarom hebben we een toelatingsbeleid geformuleerd. Bij de intake wordt er o.a. gekeken naar talent, motivatie en wie jij bent, want het is belangrijk dat je op een opleiding terechtkomt die echt bij je past. Dit doen we om zoveel mogelijk te voorkomen dat je in een vroeg stadium met je opleiding moet of wilt stoppen.<br><br>

  Verder zijn er specifieke vooropleidingseisen die verschillen per niveau en het kan zijn dat je extra ondersteuning nodig hebt. Ook gelden er bij sommige opleidingen aanvullende voorwaarden. Daarom doorloop je, als je bij het Mediacollege Amsterdam wilt studeren, eerst een intakeprocedure. Je wordt dus niet automatisch na je aanmelding geplaatst.<br><br>

<footer>
    <button class="left font meld trans" onclick="window.location.href = 'mailto:25383@ma-web.nl';">Vragen</button>
       <img onclick="window.location.href = 'index.html';" class="right klein" src="vid/logo.png">

    </footer> 

    <img class="meld2 img rond" src="vid/contact.png"> 
<br><br>
</a>
<form id="meldjeaan" class="meld2 form" action="contactform.php" method="post">
  <a class="font3"><span class="pink">M</span>eld je aan!</a><br><br>
  <h2 class="font2">BSN:</h2><br>
  <input  class="form font2 plase" type="text" name="naam" placeholder="BSN"><br><br>

  <h2 class="font2">Mail:</h2><br>
  <input class="form font2 plase" type="text" name="achternaam" placeholder="Email"><br><br>

    <h2 class="font2">Naam:</h2><br>
  <input class="form font2 plase" type="text" name="mail" placeholder="Naam"><br><br>

    <h2 class="font2">Gebortendatum:</h2><br>
  <input class="form font2 plase" type="text" name="num" placeholder="dd-jj-mmmm"><br><br>

      <h2 class="font2">Tefeloonnummer</h2><br>
  <input class="form font2 plase" type="text" name="bericht" placeholder="06"></input><br><br>

  <input class="form2 font2 plase" type="submit" name="submit" value="Verstuur"><br><br>
</form>

</div>