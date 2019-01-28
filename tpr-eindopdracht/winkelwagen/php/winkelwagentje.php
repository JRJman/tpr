<?php

$conn = mysqli_connect ('localhost', 'root', '', 'tpr-eindopdracht')
or die('De database is niet beschikbaar of de verbinding met de database server is mislukt');

mysqli_select_db($conn, 'tpr-eindopdracht')
or die('De database is niet beschikbaar');

$query = "SELECT * FROM buying";

$result = mysqli_query($conn, $query)
or die ('query mislukt..');

while ($row = mysqli_fetch_assoc($result)){
  echo "<fieldset>";
  echo "<section class = pakketjes>";
  echo "<img src=images/" . $row['kind'] . ".jpg class = img alt = T-shirt>";
  echo "<section> <h2 class = center>Soort T-shirt:</h2><p class = center>" . kind($row['kind']) . "</p></section>";
  echo "<section> <h2 class = center>Kleur:</h2> <p class = center>". checkerColor($row['color']) ."</p></section>";
  echo "<section> <h2 class = center>Size:</h2> <p class = center>". checkerSize($row['size']) ."</p></section>";
  echo "<section> <h2 class = center>Tekst</h2> <p class = center>". $row['tekst'] ."</p></section>";
  echo "<section> <h2 class = center>Amount:</h2> <p class = center>" . $row['amount'] .  "</p></section>";
  echo "<section> <h2 class = center>Prijs</h2> <p class = center>". prijs($row['kind']) ." Euro</p> </section>";
  echo "<section> <h2 class = center>Voorraad:</h2> <p class = center>". findNumber($row['kind'], $row['color'], $row['size']) ."</p> </section>";
  echo "</section>";
  echo "</fieldset>";
  }

function checkerColor($color){
  switch($color){
    case "R":
      return "Red";
    case "B":
      return "Blue";
    case "Y":
      return "Yellow";
    case "G":
        return "Green";
  }
}

function checkerSize($size){
  switch($size){
    case "S":
      return "Small";
    case "M":
      return "Medium";
    case "L":
      return "Large";
    case "XL":
        return "Extra Large";

    }
  }

function prijs($prijs){
  switch($prijs){
    case "T-shirt":
      return "6,50";
    case "lange_mouwen":
      return "8,00";
    case "nylon":
     return "7,00";
    case "Yeezy":
      return "15,00";
    case "v_hals":
      return "10,00 ";
    case "geen_mouwen":
      return "12,00";
    case "wol":
      return "8,00";
    case "diepe_v_hals":
      return "11,00";
    case "katoen":
      return "9,00";
    case "hemp":
      return "6,00";
  }
}

function kind($kind){
  switch($kind){
    case "T-shirt":
      return "Korte mouwen T-shirt";
    case "lange_mouwen":
      return "Lange mouwen T-shirt";
    case "nylon":
     return "Nylon T-shirt";
    case "Yeezy":
      return "Yeezy";
    case "v_hals":
      return "V hals";
    case "geen_mouwen":
      return "Shirt zonder mouwen";
    case "wol":
      return "Wollen T-shirt";
    case "diepe_v_hals":
      return "Diepe v hals";
    case "katoen":
      return "Katoenen T-shirt";
    case "hemp":
      return "Hempen T-shirt";
  }
}

function findNumber($kind,$color,$size){
  $number = 0;

  switch($kind){
    case "T-shirt":
      $number = 0;
      break;
    case "lange_mouwen":
      $number = 17;
      break;
    case "nylon":
      $number = 34;
      break;
    case "Yeezy":
      $number = 51;
      break;
    case "v_hals":
      $number = 68;
      break;
    case "geen_mouwen":
      $number = 85;
      break;
    case "wol":
      $number = 102;
      break;
    case "diepe_v_hals":
      $number = 119;
      break;
    case "katoen":
      $number = 136;
      break;
    case "hemp":
      $number = 153;
      break;
  }

  switch($color){
    case 'R':
    $number = $number;
      break;
    case 'B':
    $number = $number + 4;
      break;
    case 'Y':
    $number = $number + 8;
      break;
    case 'G':
    $number = $number + 12;
      break;
  }

  switch($size){
    case 'S':
    $number = $number + 1;
      break;
    case 'M':
    $number = $number + 2;
      break;
    case 'L':
    $number = $number + 3;
      break;
    case 'XL':
    $number = $number + 4;
      break;
  }

  $conn2 = mysqli_connect ('localhost', 'root', '', 'tpr-eindopdracht')
  or die('De database is niet beschikbaar of de verbinding met de database server is mislukt');

  $query2 = "SELECT * FROM voorraden WHERE id = $number";

  $result2 = mysqli_query($conn2, $query2)
  or die ('query mislukt..');

  while ($row2 = mysqli_fetch_assoc($result2)){
    return $row2['voorraad'];
  }

  return $number;
}
?>
