<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAJSTOR BOB</title>
    <link rel="stylesheet" type="text/css" href="tpl/profilMajstora.css">
    <link rel="stylesheet" type="text/css" href="tpl/profilMusterije.css">
    <link rel="stylesheet" href="tpl/index.css">
</head>
<body>

    <div class="topnav" id="myTopnav">
    <a href="index.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-cogs w3-margin-right"></i>MajstorBob</a>
    <a href="profil.php" class="w3-bar-item w3-button w3-mobile">Moj profil</a>
    <a href="inbox.php" class="w3-bar-item w3-button w3-mobile">Poruke</a>
    <a href="pomoc.php" class="w3-bar-item w3-button w3-mobile">Pomoć</a>
    <a href="kontakt.php" class="w3-bar-item w3-button w3-mobile">O nama</a>
    <a href="#contact" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Uloguj se</a>
    <a href="registrovanjeMusterija.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Prijavi se</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} 
</script>
    
<div class="card">
    <div class="online">
        <img class="onlineAvatar" src="online.png" alt="Dostupnost">Trenutno prijavljen
    </div>
    <img src="profAvatar.png" alt="Slika profila" style="width:100%">
    <div class="musterijaName">
        <p>Musterija Marko Markovic</p>
    </div>
    <p class="title">Banovo brdo, Beograd</p>
    <p>+381 64 2020200</p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>Posalji poruku</button></p>
</div>

</body>
</html>