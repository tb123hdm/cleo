<!DOCTYPE html>
<html>
<body>

<?php
$zielordner='//home/tb123/public_html/cleo/uploads/';
$newURL='https://mars.iuk.hdm-stuttgart.de/~tb123/profil.php';
if (!isset($_FILES['bild']))
{
    echo "keine Datei";
    die();
}
$zieldatei= $zielordner . basename($_FILES['bild']['name']); //username aus der Datenbank
echo "Datei:".$zieldatei;
if(move_uploaded_file($_FILES['bild']['tmp_name'],$zieldatei)){
   header('Location:'.$newURL);
}

else {
    echo "Fehler beim Upload";
}
?>

</body>
</html>