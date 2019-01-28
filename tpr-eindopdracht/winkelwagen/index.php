<!DOCTYPE html>
<html lang="nl">
  <head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="navigatie">
      <img src="images/winkelwagen.png" alt="" onclick="Home()">
      <h1 class="center">JRJman Shirts</h1>
      <img src="images/winkelwagen.png" alt="" onclick="Winkelwagen()">
    </header>
    <main>
      <form action="php/change.php">
        <?php include "php/winkelwagentje.php"?>
        <input type="submit" value="buy" id="button">
      </form>
    </main>
    <script src="javascript/java.js"></script>
  </body>
<html>
