<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MajstorBob</title>
    <link rel="stylesheet" type="text/css" href="tpl/profilOglasa.css">
    <link rel="stylesheet" type="text/css" href="tpl/profilMajstora.css">
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
    <!--<img class="velikaSlika" src="oglas1.jpg" alt="Slika profila">-->

    <!--<div class="slike">
    <img class="malaSlika" src="oglas2.jpg" alt="Slika oglasa">
    <img class="malaSlika" src="oglas3.jpg" alt="Slika oglasa">
    <img class="malaSlika" src="oglas4.jpg" alt="Slika oglasa">
    </div>-->

    
    <div class="informacije">
    <p>Kategorija</p>
    
    <p class="title">[[$oglas->vrsta_posla]]</p>
    <p>Lokacija</p>
    <p class="title">[[$oglas->mesto]]</p>
    <p>Datum postavljanja</p>
    <p class="title">[[$oglas->datum]]</p>
    </div>
</div>

<div class="oglas">
    <h1 style="text-align: center;">Naslov oglasa</h1>
    <p>[[$oglas->tekst_oglasa]]</p>
    <div class="apliciraj">
    <button>APLICIRAJ</button>
    </div>
</div>

<!--<div class="oglasivac">
    <p>OGLASIVAC</p>
    <button class="idiNaProfil"> Marko Markovic </button>-->
    <!--<div class="musterijaName"> <p>Nis</p> </div>-->

  <!--  <button>Posalji poruku</button>

</div>-->

</body>
</html>