<?php

$conn = mysqli_connect ('localhost', 'root', '', 'tpr-eindopdracht')
or die('De database is niet beschikbaar of de verbinding met de database server is mislukt');

mysqli_select_db($conn, 'tpr-eindopdracht')
or die('De database is niet beschikbaar');

$color = $_POST['color'];
$size = $_POST['size'];
$tekst = $_POST['tekst'];
$kind = $_POST['kind'];
$number = $_POST['number'];

$sql = "INSERT INTO buying (id, kind, color, size, tekst, amount)
VALUES ('', '$kind', '$color', '$size', '$tekst', '$number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: http://localhost/tpr-eindopdracht/winkelwagen/index.php');
?>
