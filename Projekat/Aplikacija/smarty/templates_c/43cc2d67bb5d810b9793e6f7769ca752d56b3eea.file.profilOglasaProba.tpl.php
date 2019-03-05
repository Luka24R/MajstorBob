<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 08:46:03
         compiled from "tpl\profilOglasaProba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124985b259c078e5454-19675178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43cc2d67bb5d810b9793e6f7769ca752d56b3eea' => 
    array (
      0 => 'tpl\\profilOglasaProba.tpl',
      1 => 1529482198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124985b259c078e5454-19675178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b259c079f1e71_13773926',
  'variables' => 
  array (
    'prijavljenAdmin' => 0,
    'id' => 0,
    'ja' => 0,
    'oglas' => 0,
    'prijavljeni' => 0,
    'majstor' => 0,
    'majstorKojiGleda' => 0,
    'imaSlika' => 0,
    'slika' => 0,
    'musterija' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b259c079f1e71_13773926')) {function content_5b259c079f1e71_13773926($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <title>MajstorBOB | Oglas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
    <body class="w3-light-grey">

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px">

            <!-- The Grid -->
            <div class="w3-row-padding" style="margin-top: 60px; height: 100%">

                <!-- Left Column -->
                <div class="w3-quarter">

                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="slike/oglas1.jpg" style="width:100%" alt="Avatar">
                            <?php if ($_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                            <a href="obrisiOglas.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ OGLAS</a>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['ja']->value&&!$_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                            <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ OGLAS</button>

                            <?php }?>
                        </div>


                        <div class="w3-container">
                            <br>


                            <p><strong><i class="fa fa-wrench fa-fw w3-margin-right w3-large w3-text-red"></i> Kategorija </strong></p><p class="title"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->vrsta_posla;?>
</p>
                            <p><strong><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-red"></i> Adresa</strong></p><p class="title">
                                <?php echo $_smarty_tpl->tpl_vars['oglas']->value->adresa;?>
</p>
                            <p><strong><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-red"></i> Mesto</strong></p><p class="title"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->mesto;?>
</p>


                            <!-- <form action="actionBrisanjeOglasa.php" method="post">
                             <button class="w3-button w3-red w3-block" type="submit" name="submit">OBRIŠI OVAJ OGLAS</button> <!-- OVO JE MUSTERIJA SAMA SEBI DA BRISE OGLAS -->
                            <!-- </form>-->
                        </div>

                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-half">

                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-newspaper-o fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Posao</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Opis posla</b></h5>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['oglas']->value->tekst_oglasa;?>

                            </p>
                            <h6 class="w3-text-red"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                <?php echo $_smarty_tpl->tpl_vars['oglas']->value->datum;?>
</h6>


                            <hr>
                        </div>
                        <div class="w3-container">
                            <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                            <a href="obrisiOglas.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Obriši oglas</a>
                            <hr>
                            <div>
                                <h4 class="w3-opacity">Prijavljeni majstori</h4>
                                <?php  $_smarty_tpl->tpl_vars['majstor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['majstor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prijavljeni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['majstor']->key => $_smarty_tpl->tpl_vars['majstor']->value){
$_smarty_tpl->tpl_vars['majstor']->_loop = true;
?>
                                <div class="w3-row">
                                    <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['majstor']->value->prezime;?>
 
                                    <a href="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" class="w3-button  w3-red w3-mobile pull-right" style="text-decoration: none"> Prikaži profil</a>
                                    <?php if (!$_smarty_tpl->tpl_vars['oglas']->value->majstor_koji_radi_email){?>

                                    <a href="angazuj.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&worker=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" class="w3-button  w3-red w3-mobile pull-right" style="text-decoration: none"> Angažuj</a>
                                    <?php }else{ ?>
                                    <?php if ($_smarty_tpl->tpl_vars['oglas']->value->majstor_koji_radi_email==$_smarty_tpl->tpl_vars['majstor']->value->majstor_Email){?>
                                    <i class="w3-mobile pull-right">Angažovan</i>
                                    <?php }?>
                                    <?php }?>


                                </div>
                                <hr>
                                <?php } ?>
                            </div>
                            <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['oglas']->value->majstor_koji_radi_email){?>

                            <h2>Majstor za ovaj posao je pronađen</h2>
                            <?php if ($_smarty_tpl->tpl_vars['oglas']->value->majstor_koji_radi_email==$_smarty_tpl->tpl_vars['majstorKojiGleda']->value){?>
                            <i class="w3-mobile ">Angažovani ste</i>
                            <hr>
                            <?php }?>
                            <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['majstor']->value){?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['majstorKojiGleda']->value,$_smarty_tpl->tpl_vars['oglas']->value->prijavljeniMajstori)&&!$_smarty_tpl->tpl_vars['oglas']->value->majstor_koji_radi_email==$_smarty_tpl->tpl_vars['majstorKojiGleda']->value){?>
                            <i class="w3-mobile ">Prijavljeni ste za ovaj posao</i>
                            <a href="prijavaZaPosao.php?otkaziPrijavu=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Otkaži prijavu</a>
                            <hr>
                            <?php }else{ ?>
                            <?php if (!$_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                            <a href="prijavaZaPosao.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Prijavi se za obavljanje posla</a>
                            <?php }?>
                            <?php }?>
                            <?php }?>
                            <?php }?>
                            <?php }?>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['ja']->value){?>
                <div class="w3-container w3-quarter w3-card w3-white">

                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-red"></i> Oglasivač</h2>
                    <div class="w3-display-container">
                        <?php if ($_smarty_tpl->tpl_vars['imaSlika']->value){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['slika']->value;?>
" style="width:100%" alt="Avatar">
                        <?php }else{ ?>
                        <img src="slike/luka.jpg" style="width:100%" alt="Avatar">
                        <?php }?>
                        <h2 class="w3-text-grey w3-padding-16">  <?php echo $_smarty_tpl->tpl_vars['musterija']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['musterija']->value->prezime;?>
</h2>
                        <a href="profil.php?client=<?php echo $_smarty_tpl->tpl_vars['musterija']->value->musterija_Email;?>
" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Prikaži profil</a> 
                        <br>

                    </div>

                </div>

                <?php }?>
                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <!-- Modal Da li ste sigurni-->
        <div id="id20" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id20').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Prijavi oglas?</h2>
                    <p>Da li ste sigurni da želite da se prijavite ovaj oglas kao nepoželjni sadržaj?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="prijaviOglas.php" method="post">
                        <input type="hidden" name="hdnId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <p>Zbog čega želite da prijavite ovaj oglas kao nepoželjni sadržaj?</p>
                        <input type="text" name="razlog" class="w3-input w3-card w3-light-grey">
                        <br>
                        <button onclick="document.getElementById('id20').style.display = 'none';
                                document.getElementById('id30').style.display = 'block'" type="submit" name="submit" class="w3-button w3-red w3-half"><i class="fa fa-exclamation-triangle"></i> Da</button>
                        <span onclick="document.getElementById('id20').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>   
                        <br>
                        <hr>
                    </form>

                </div>

            </div>
        </div>

        <!-- Modal Uspešna prijava-->
        <div id="id30" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-green">
                    <span onclick="document.getElementById('id20').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Nepoželjni sadržaj je uspešno prijavljen</h2>
                    <br>
                </div>

            </div>
        </div>

    </body>
</html>
<?php }} ?>