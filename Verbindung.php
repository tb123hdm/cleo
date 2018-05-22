<?php
$user='tb123';
$pw='JahJ8cuuz3';
$dsn='mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-tb123';
try {
    $pdo = new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-tb123'; 'tb123'; 'JahJ8cuuz3'; array('charset' => 'utf8'));
}
catch(PDOException$p){
    echo "Fehler bei Datenbankverbindung";
}


$sqlabfrage='SELECT Email FROM cleo-nutzer WHERE NutzerID=1';
$ergebnis=$db->query($sqlabfrage);
while($row=$ergebnis->fetch(PDO::FETCH_ASSOC)){
    echo $row['name'].'/'.$row['email'].'<br/>';
}
if(! $ergebnis=$db->query($sqlabfrage)){
    $fehlerArray= $db->errorInfo();
    echo "Es ist Fehler".$fehlerArray[1]."aufgetreten:".$fehlerArray[2];
}
