<!DOCTYPE html>
<html lang="nl">
  <head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="navigatie">
      <img src="images/winkelwagen.png" alt="" onclick="Home()">
      <h1>JRJman Shirts</h1>
      <img src="images/winkelwagen.png" alt="" onclick="Winkelwagen()">
    </header>
    <form action="http://localhost/tpr-eindopdracht/maken/php/kopen.php" method="post" id="form">
      <main>
        <img src="images/<?php echo $_GET["website"];?>.jpg" alt="" id="img">
        <section id="right">
          <section>
            <h2>Welke kleur wil je hebben?</h2>
            <select id="kleuren" name="color">
              <option value="R" id="rood">Red</option>
              <option value="B" id="blauw">Blue</option>
              <option value="Y" id="geel">Yellow</option>
              <option value="G" id="groen">Green</option>
            </select>
          </section>
          <section>
            <h2>Welke maat wil je hebben?</h2>
            <select id="keuze" name="size">
              <option value="S">Small</option>
              <option value="M">Medium</option>
              <option value="L">Large</option>
              <option value="XL">Extra Large</option>
            </select>
          </section>
          <section>
            <h2>Welke Tekst wil je hebben op je T-shirt?</h2>
            Maximaal 20 tekens.<br>
            <textarea name="tekst" form="form" rows="1" cols="30" maxlength="20" required></textarea>
            <h2>Hoeveel van deze soort T-shirts wil je hebben?</h2>
            <textarea name="number" form="form" rows="1" cols="10" maxlength="3" required></textarea>
          </section>
        </section>
        <section id="left">
          <h2>Prijs</h2>
          <h2>Informatie</h2>
          <p>tekst informatie</p>
        </section>
        <section>
          <input type="hidden" name="kind" value="<?php echo $_GET["website"];?>">
          <input type="submit" name="buy" value="In je winkelwagen stoppen" id="kopen">
        </section>
      </main>
    </form>
    <script src="javascript/java.js"></script>
  </body>
<html>
