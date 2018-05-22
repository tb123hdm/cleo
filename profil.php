<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head/>
    <style>
        .container{
            width:100%;
        }
        .layout h1{
            padding-left: 50px;
            padding-top:10px;
            padding-bottom:10px;
            background-color: azure;
        }
        .img_profile
        {
            position: relative;
            top:0px;
            left:0px;
        }
        #bild{
            height: 300px;
            width: 300px;
            margin-right: 20px;
        }
        .inhalt{
            margin-left: 85px;
            margin-top:20px;
            font-size: 15px;
        }
        .gemeinsam{
            width: 730px;
            height: 350px;
            clear: both;
        }
        .bild{
            float: left;
            width: 320px;
            margin-right: 50px;
        }
        #information{
            float: right;
            width: 310px;
            margin-left: 50px;
            font-size: 20px;
        }
    </style>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="logo.png" width="120" height="80" alt="">
            </a>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Einstellungen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profil.php">Mein Konto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Abmelden</a>
                    </div>
                </li>
                <nav style='padding-left:50px' class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="standardbild2.jpg" width="60" height="60" class="rounded-circle" alt="">
                        er042
                    </a>
                </nav>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<head>
    <title>Kontoverwaltung</title>
</head>
<body>


<div class="inhalt">

    <h1>Mein Konto</h1><br>
    <div class="gemeinsam">

    <div class="bild">
        <img src="standardbild2.jpg" id="bild" class="rounded-circle"><br><br>
    </div>

    <div id="information">
        Benutzername: Name1234<br><br>
        E-Mail:<br><br>
        Nachname:<br><br>
        Vorname:<br><br>
    </div>
    </div>
    <div class="aendern">
        <div action="upload.php" method="post" enctype="multipart/form-data">
            Profilbild ändern <input type="file" name="bild" id="bild">
            <input type="submit" value="Hochladen" name="hochladen">
        </form>
        </div>
    </div>

    </div>
</body>
</html>