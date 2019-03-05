<?php /* Smarty version Smarty-3.1.13, created on 2018-06-13 14:05:47
         compiled from "tpl\profilOglasa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12745b21152f2b3b80-84126241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fd1ea485a9701f9bb537e5e42e51b783a24ad7' => 
    array (
      0 => 'tpl\\profilOglasa.tpl',
      1 => 1528898742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12745b21152f2b3b80-84126241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b21152f2f08e4_94794053',
  'variables' => 
  array (
    'oglas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21152f2f08e4_94794053')) {function content_5b21152f2f08e4_94794053($_smarty_tpl) {?><!DOCTYPE html>
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
    
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->vrsta_posla;?>
</p>
    <p>Lokacija</p>
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->mesto;?>
</p>
    <p>Datum postavljanja</p>
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->datum;?>
</p>
    </div>
</div>

<div class="oglas">
    <h1 style="text-align: center;">Naslov oglasa</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['oglas']->value->tekst_oglasa;?>
</p>
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
</html><?php }} ?>