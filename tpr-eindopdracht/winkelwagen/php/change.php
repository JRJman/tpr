<?php
$conn = mysqli_connect ('localhost', 'root', '', 'tpr-eindopdracht')
or die('De database is niet beschikbaar of de verbinding met de database server is mislukt');

$producten = "SELECT * FROM buying";

$result = mysqli_query($conn, $producten)
or die ('query mislukt..');

while ($row = mysqli_fetch_assoc($result)){

  $number = findNumber($row['kind'],$row['color'],$row['size']);
  $number2 = findNumber2($row['kind']);
  $aantal = $row['amount'];
  echo $aantal . "<br>";
  echo $number . "<br>";

  $update = "UPDATE voorraden SET voorraad = voorraad - $aantal WHERE id=$number";
  $update2 = "UPDATE voorraden SET voorraad = voorraad - $aantal WHERE id=$number2";

  $conn->query($update);
  $conn->query($update2);
}

$delete = "DELETE FROM buying";
$conn->query($delete);

// header('Location: http://localhost/tpr-eindopdracht/winkelwagen/index.php');

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

    return $number;
  }

  function findNumber2($kind){
    switch($kind){
      case "T-shirt":
        return 17;
      case "lange_mouwen":
        return 34;
      case "nylon":
        return 51;
      case "Yeezy":
        return 68;
      case "v_hals":
        return 85;
      case "geen_mouwen":
        return 102;
      case "wol":
        return 119;
      case "diepe_v_hals":
        return 136;
      case "katoen":
        return 153;
      case "hemp":
        return 170;
    }
  }
?>
