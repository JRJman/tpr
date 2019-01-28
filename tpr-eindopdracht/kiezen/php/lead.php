<?php
function voorraad($number){

  $conn = mysqli_connect ('localhost', 'root', '', 'tpr-eindopdracht')
  or die('De database is niet beschikbaar of de verbinding met de database server is mislukt');

  mysqli_select_db($conn, 'tpr-eindopdracht')
  or die('De database is niet beschikbaar');

  $query = "SELECT voorraad FROM voorraden WHERE id = $number;";

  $result = mysqli_query($conn, $query)
  or die ('query mislukt..');

  while ($row = mysqli_fetch_assoc($result)){
    echo $row['voorraad'] . "<br>\n";
    }
}
?>
