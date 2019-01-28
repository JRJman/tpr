<!DOCTYPE html>
<html lang="nl">
  <head>
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <?php include "php/lead.php" ?>
  <body>
    <header class="navigatie">
      <img src="images/winkelwagen.png" alt="" onclick="Home()">
      <h1>JRJman Shirts</h1>
      <img src="images/winkelwagen.png" alt="" onclick="Winkelwagen()">
    </header>
    <main>
      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=T-shirt"><img src="images/T-shirt.jpg" alt="" class="product"></a>
        <p>Korte mouwen T-shirt <br>6,50 euro <br>voorraad: <?php voorraad("17") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=lange_mouwen"><img src="images/lange_mouwen.jpg" alt="" class="product"></a>
        <p>Lange mouwen T-shirt <br>8,00 euro <br>voorraad: <?php voorraad("34") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=nylon"><img src="images/nylon.jpg" alt="" class="product"></a>
        <p>Nylon T-shirt <br>7,00 euro <br>voorraad: <?php voorraad("51") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=Yeezy"><img src="images/Yeezy.jpg" alt="" class="product"></a>
        <p>Yeezy <br>15,00 euro <br>voorraad: <?php voorraad("68") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=v_hals"><img src="images/v_hals.jpg" alt="" class="product"></a>
        <p>V hals <br>10,00 euro <br>voorraad: <?php voorraad("85") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=geen_mouwen"><img src="images/geen_mouwen.jpg" alt="" class="product"></a>
        <p>Shirt zonder mouwen <br>12,00 euro <br>voorraad: <?php voorraad("102") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=wol"><img src="images/wol.jpg" alt="" class="product"></a>
        <p>Wollen T-shirt <br>8,00 euro <br>voorraad: <?php voorraad("119") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=diepe_v_hals"><img src="images/diepe_v_hals.jpg" alt="" class="product"></a>
        <p>Diepe v hals<br>11,00 euro <br>voorraad: <?php voorraad("136") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=katoen"><img src="images/katoen.jpg" alt="" class="product"></a>
        <p>Katoenen T-shirt <br>9,00 euro <br>voorraad: <?php voorraad("153") ?></p>
      </section>

      <section>
        <a href="http://localhost/tpr-eindopdracht/maken/index.php?website=hemp"><img src="images/hemp.jpg" alt="" class="product"></a>
        <p>Hempen T-shirt <br>6,00 euro <br>voorraad: <?php voorraad("170") ?></p>
      </section>
    </main>
    <script src="javascript/java.js"></script>
  </body>
<html>
