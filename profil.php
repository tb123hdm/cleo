<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontoverwaltung</title>
    <style>
        body {
            font-family: Helvetica
        }

        #header{
            background-color: cornflowerblue;
            height: 150px;
            width: 100%;
            font-family: Helvetica;
            color: white;
            font-size: 70px;
            display: flex;
            justify-content: space-around;
            flex-direction: row;
        }
        .bild{
            height: 200px;
            width: 200px;
        }
    </style>
</head>
<body>
<div id="header">
    CLEO
</div>

<h1>Profil</h1>

<img src="standardbild.jpg" class="bild"></br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Profilbild <input type="file" name="bild" id="bild">
    <input type="submit" value="Hochladen" name="hochladen">
</form>
<?php
if ($_POST['hochladen'])
$bildname =$_FILES['bild']['name'];
$bildtmp=$_FILES['bild'][tmp_name];

echo $bildname."<br/>";
echo $bildtmp;

$bildname = "user.gif";

if($bildname!='' AND $bildtmp!='') {
    $pfad ='//home/tb123/public_html/cleo/uploads/'.$bildname;
    move_uploaded_file($bildtmp, $pfad);


}


?>
Benutzername:<br>
E-Mail:<br>
Nachname:<br>
Vorname:
</body>
</html>