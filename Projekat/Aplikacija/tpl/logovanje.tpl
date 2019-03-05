<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MajstorBob</title>
    <link rel="stylesheet" type="text/css" href="tpl/logovanje2Stil.css">
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
    
<div>
<form action="actionLogovanje.php" method="POST">
    <div class="imgcontainer">
        <img src="tpl/logAvatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="txtImejl"><b>Unesite vašu imejl adresu</b></label>
        <input type="text" placeholder="Imejl adresa" name="txtImejl" required>

        <label for="txtLozinka"><b>Unesite vašu lozinku</b></label>
        <input type="password" placeholder="Lozinka" name="txtLozinka" required>

        <button type="submit" name="sbmPrijaviSe">Prijavi se</button>
        <label>
            <input type="checkbox" checked="checked" name="chkUpamti"> Upamti me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" name="btnOdustani" class="btnOdustani">Vrati se nazad</button>
        <span class="txtImejl"><a href="#">Zaboravili ste lozinku?</a></span>
    </div>
</form>
</div>
</body>
</html>