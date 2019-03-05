<?php /* Smarty version Smarty-3.1.13, created on 2018-06-13 14:14:12
         compiled from "tpl\profilMajstora.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127915b0c2fe6220064-62917765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c133dfa90ccaca1a5ba418dca6bfac0728ee9f49' => 
    array (
      0 => 'tpl\\profilMajstora.tpl',
      1 => 1528899248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127915b0c2fe6220064-62917765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b0c2fe62684d7_45273163',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c2fe62684d7_45273163')) {function content_5b0c2fe62684d7_45273163($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MajstorBob</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!--<h1>Majstor</h1>-->
    <div class="online">
    <img class="onlineAvatar" src="slike/online.png" alt="Dostupnost">Trenutno prijavljen
    </div>
    <img src="slike/profAvatar.png" alt="Slika profila" style="width:100%">

    <div class="ocenaCard">
        <h1><img class="ratingAvatar" src="slike/goldenStar.png" alt="o">9,25</h1>
    </div>

    <!--<div class="nameCard"><p>Dostupan za posao</p></div>
    <h1>Petar Petrović</h1>
    <p class="title">Beograd (Čukarica, Palilula, Stari grad)</p>-->
    <!--<p>Građevinski radovi</p>-->
    <p><button>Pošalji poruku</button></p>
</div>


<div class="nameCard">
    <h1>Majstor Petar Petrović</h1>
</div>

<div class="miniCard">
    <h1>Građevinski radovi</h1>
</div>

<div class="card">
    <h1><img class="starAvatar" src="slike/info1.png" alt="i">Informacije</h1>
    <p>Kontakt telefon: </p><p class="title">060/12-34-567</p>
    <p>Adresa stanovanja: </p><p class="title">Kralja Milutina 10</p>
    <p>Imejl adresa: </p><p class="title">petar.petrovic@email.com</p>
    <p>Izlazak na teren: </p><p class="title">Da</p>
    <p>Kvalifikacije: </p><p class="title">Molerisanje, armatura, sečenje i bušenje</p>
    <p>Radno vreme: </p><p class="title">Radni dani: 9.00-21.00</p>
    <p class="title">Subota: 9.00-15.00</p>
    <p class="title">Nedelja: Ne radi</p>
</div>

<div class="card">

    <h1><img class="starAvatar" src='slike/star.png' alt="s"/> Oceni majstora</h1>
        <form method="post" action="actionOcenivanje.php" />
        <input type="hidden" name="vote[id]" value="1332" />
        <input type='hidden' name="vote[url]" value="http://www.nadjimajstora.rs/cevne-instalacije/vodoinstalater/petar-dimitrijevic-zeleznik-1332.htm" />
        <!--<label>Kvalitet usluge</label>
        <input type="range" style=" visibility: visible; " name="vote[vote_1]" min="0" max="10" value="0" step="1" id="vote_1"/>

        <label>Poštovanje rokova</label>
        <input type="range" style=" visibility: visible; " name="vote[vote_2]" min="0" max="10" value="0" step="1" id="vote_2"/>

        <label>Povoljnost cena</label>
        <input type="range" style=" visibility: visible; " name="vote[vote_3]" min="0" max="10" value="0" step="1" id="vote_3"/>
        -->
        <div class="miniBar">
            <label>Kvalitet usluge</label>
            <label>Poštovanje rokova</label>
            <label>Povoljnost cena</label>
        </div>

        <div class="miniBar">
            <input type="range" style=" visibility: visible; " name="vote[vote_1]" min="0" max="10" value="0" step="1" id="vote_1"/>
            <input type="range" style=" visibility: visible; " name="vote[vote_2]" min="0" max="10" value="0" step="1" id="vote_2"/>
            <input type="range" style=" visibility: visible; " name="vote[vote_3]" min="0" max="10" value="0" step="1" id="vote_3"/>
        </div>



        <input type="Submit" class="available" value="Oceni">
        </form>

    <br>

    <form name="form" method="post" action="">
        <div style="text-align: center">
            <h1><img class="starAvatar" src="slike/message.png" alt="L">Prokomentarišite majstora</h1>
        </div>
        <div style="float: left; margin-left: 10px; text-align: center">
            <div>Ime</div>
            <input name="txtIme" type="text" style="width:380px; font-size:11px;" >
            </div>
        <div style="float: left; margin-left: 10px; text-align: center">
            <div><img class="signAvatar" src="plus.png"></div>
            <input name="txtPlus" type="text" style="width:380px; font-size:11px; color:#73a229;">
            </div>
        <div style="float: left; margin-left: 10px; text-align: center">
            <div><img class="signAvatar" src="minus.svg"></div>
                <input name="txtMinus" type="text" style="width:380px; font-size:11px;  color:#ce3400;">
            </div>
        <div style="float: left; margin-left: 10px">
            <div>Komentar</div>
                <textarea name="txtKomentar" style="width:380px; height:96px; font-size:11px;">

                </textarea>
        </div><div id="onefield">
        <div id="named">&nbsp;</div>
        <div id="inputs"><input name="f_addcomment" type="hidden" value=1>
            <input name="Submit" value="Pošalji komentar!" type="submit" id="submit">
        </div></div>
    </form>

    </div>

</div>

</body>
</html><?php }} ?>