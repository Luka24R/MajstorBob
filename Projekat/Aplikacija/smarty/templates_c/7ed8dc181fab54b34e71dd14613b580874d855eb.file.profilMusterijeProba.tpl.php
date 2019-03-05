<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 08:46:06
         compiled from "tpl\profilMusterijeProba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139315b25832a9c4499-50196903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed8dc181fab54b34e71dd14613b580874d855eb' => 
    array (
      0 => 'tpl\\profilMusterijeProba.tpl',
      1 => 1529449040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139315b25832a9c4499-50196903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b25832a9fb0f4_43305023',
  'variables' => 
  array (
    'imaSlika' => 0,
    'slika' => 0,
    'prijavljenAdmin' => 0,
    'imejl' => 0,
    'ja' => 0,
    'musterija' => 0,
    'prijavljenMusterija' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b25832a9fb0f4_43305023')) {function content_5b25832a9fb0f4_43305023($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="tpl/kalendarStil.css">
        <link rel="stylesheet" href="tpl/StarRating.css">
        <link rel="stylesheet" type="text/css" href="tpl/profilMajstora.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="tpl/profilM.css" rel="stylesheet">
    <body class="w3-light-grey">
        <div class="container" style="margin-top: 60px;height: 100%">
            <div class="row">

                <div class="col w3-third">
                    <div class="w3-card w3-round w3-white">
                        <div id="accordion" class="accordion w3-card w3-round w3-white">

                            <div class="col col_4 iamgurdeep-pic">
                                <?php if ($_smarty_tpl->tpl_vars['imaSlika']->value){?>
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="<?php echo $_smarty_tpl->tpl_vars['slika']->value;?>
">
                                <?php }else{ ?>
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="slike/profAvatar.png">
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                                <a href="brisanje.php?musterijaBrisanje=<?php echo $_smarty_tpl->tpl_vars['imejl']->value;?>
" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ PROFIL</a>
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['ja']->value&&!$_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                                <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ PROFIL</button>

                                <?php }?>
                                <div class="username">
                                    <h2 style="color: red"><!--Petar Petrović --><?php echo $_smarty_tpl->tpl_vars['musterija']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['musterija']->value->prezime;?>

                                        <!--<small><i class="fa fa-map-marker"></i> Beograd </small>
                                        --></h2>
                                    <?php if ($_smarty_tpl->tpl_vars['prijavljenMusterija']->value){?>
                                    <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                                    <a name='btnIzmeniMusterija' href="izmeniMojProfil.php?btnIzmeniMusterija=<?php echo $_smarty_tpl->tpl_vars['musterija']->value->musterija_Email;?>
" class="btn-o"> <i class="fa fa-edit"></i> Izmeni svoj profil </a>
                                    <?php }?>
                                    <?php }else{ ?>

                                    <a name='btnPosPorukuMusterija' href="novaPoruka.php?btnPosPorukuMusterija=<?php echo $_smarty_tpl->tpl_vars['musterija']->value->musterija_Email;?>
" class="btn-o"> <i class="fa fa-envelope"></i> Pošalji poruku </a>
                                    <?php }?>
                                </div>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                            <form action="mojiOglasi.php" method="POST">
                                <input type="hidden" name="hdnEmail" value="<?php echo $_smarty_tpl->tpl_vars['musterija']->value->musterija_Email;?>
">

                                <button name='btnMojiOglasi' 
                                        class="accordion w3-red"><i class="fa fa-newspaper-o"></i> Moji oglasi</button>
                            </form>
                            <?php }else{ ?>
                            <button name='btnMojiOglasi' onclick="window.location = '#'"
                                    class="accordion w3-white"><i class=""></i></button>
                            <?php }?>


                        </div>


                    </div>
                </div>

                <div class="w3-row-padding w3-twothird">


                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2 style="text-align: center;"><i class="fa fa-info"></i> Informacije</h2>
                            <hr>
                            <br>

                            <p style="color: red"><strong><i class="fa fa-phone"></i> Kontakt telefon</strong></p><p class="title"><!--060/12-34-567--><?php echo $_smarty_tpl->tpl_vars['musterija']->value->kontakt;?>
</p>
                            <p style="color: red"><strong><i class="fa fa-home"></i> Adresa stanovanja</strong></p><p class="title"><!--Kralja Milutina 10--><?php echo $_smarty_tpl->tpl_vars['musterija']->value->lokacija;?>
</p>
                            <p style="color: red"><strong><i class="fa fa-at"></i> Imejl adresa</strong></p><p class="title"><!--petar.petrovic@email.com--><?php echo $_smarty_tpl->tpl_vars['musterija']->value->musterija_Email;?>
</p>
                            <br>
                            <hr>
                            <br>
                            <!--<button class="w3-button w3-red"><i class="fa fa-edit"></i> Izmeni svoj profil</button>-->

                        </div>
                    </div>
                </div>

            </div>


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
                    <form action="prijaviProfil.php" method="post">
                        <input type="hidden" name="klijentId" value="<?php echo $_smarty_tpl->tpl_vars['imejl']->value;?>
">
                        <p>Zbog čega želite da prijavite ovaj profil kao nepoželjni sadržaj?</p>
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

    </body><?php }} ?>