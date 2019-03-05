<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 21:04:10
         compiled from "tpl\profilMajstoraProba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82445b23158900d8f5-62326663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa3dc08dad4b5155f78db6468ae20e2dfa53727' => 
    array (
      0 => 'tpl\\profilMajstoraProba.tpl',
      1 => 1529528649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82445b23158900d8f5-62326663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b231589042d94_66776597',
  'variables' => 
  array (
    'imaSlika' => 0,
    'slika' => 0,
    'prijavljenAdmin' => 0,
    'imejl' => 0,
    'ja' => 0,
    'majstor' => 0,
    'l' => 0,
    'z' => 0,
    'drugiMajstor' => 0,
    'ocenio' => 0,
    'kom' => 0,
    'datumi' => 0,
    'datum' => 0,
    'db' => 0,
    'dogadjaj' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b231589042d94_66776597')) {function content_5b231589042d94_66776597($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <link rel="stylesheet" href="tpl/kalendarStil.css">
        <link rel="stylesheet" href="tpl/StarRating.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="tpl/profilM.css" rel="stylesheet">
    <body class="w3-light-grey" >
        <div class="container" style="margin-top: 60px; height: 100%">
            <div class="row">

                <div class="col w3-quarter">
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
                                <a href="brisanje.php?majstorBrisanje=<?php echo $_smarty_tpl->tpl_vars['imejl']->value;?>
" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ PROFIL</a>		
                                <?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['ja']->value&&!$_smarty_tpl->tpl_vars['prijavljenAdmin']->value){?>
                                <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ PROFIL</button>

                                <?php }?>
                                <div class="username">
                                    <h2 style="color: red"><?php echo $_smarty_tpl->tpl_vars['majstor']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['majstor']->value->prezime;?>
 

                                        <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstor']->value->lokacije; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                        <small><i class="fa fa-map-marker"></i> <?php echo $_smarty_tpl->tpl_vars['l']->value->mesto;?>
 </small></h2>
                                    <?php } ?>
                                    <?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstor']->value->zanati; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
                                    <p><i class="fa fa-briefcase"></i> <?php echo $_smarty_tpl->tpl_vars['z']->value->tip;?>
  </p>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>

                                    <a name='btnIzmeniMajstor' href="izmeniMojProfil.php?btnIzmeniMajstor=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" class="btn-o"> <i class="fa fa-edit"></i> Izmeni svoj profil </a>
                                    <?php }else{ ?>
                                    <?php if (!$_smarty_tpl->tpl_vars['drugiMajstor']->value){?>
                                    <a name='btnPosPorukuMajsotor' href="novaPoruka.php?btnPosPorukuMajsotor=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" class="btn-o"> <i class="fa fa-envelope"></i> Pošalji poruku </a>
                                    <?php }?>
                                    <?php }?>
                                    <h4 class="pull-right"><i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ocena;?>
</h4>

                                </div>

                                


                            </div>
                            
                            <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                                <button class="accordion w3-red" onclick="location.href = 'mojiOglasi.php?prijava=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
';" style="margin-bottom: 20px"><i class="fa fa-info-circle"></i>Prijave za posao</button>
                                <?php }?> 
                            <button class="accordion w3-red" style="margin-top: 5px;"><i class="fa fa-info-circle"></i> O majstoru</button>
                            <div class="panel">
                                <p>Email:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
</p>
                                <p>Adresa:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->adresa;?>
</p>
                                <p>Kontakt:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->kontakt;?>
</p>
                                <p>Kvalifikacije:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->kvalifikacije;?>
</p>
                            </div>

                            <button class="accordion w3-red"><i class="fa fa-clock-o"></i> Satnica</button>
                            <div class="panel">
                                <p>Radni dan:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->vreme_radni_dan;?>
h</p>
                                <p>Subota:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->vreme_subota;?>
h</p>
                                <p>Nedelja:<?php echo $_smarty_tpl->tpl_vars['majstor']->value->vreme_nedelja;?>
h</p>
                            </div>

                            
                            <script>
                                var acc = document.getElementsByClassName("accordion");
                                var i;

                                for (i = 0; i < acc.length; i++) {
                                    acc[i].addEventListener("click", function () {
                                        this.classList.toggle("active");
                                        var panel = this.nextElementSibling;
                                        if (panel.style.maxHeight) {
                                            panel.style.maxHeight = null;
                                        } else {
                                            panel.style.maxHeight = panel.scrollHeight + "px";
                                        }
                                    });
                                }
                            </script>


                        </div>


                    </div>
                </div>

                <div class="w3-row-padding w3-half">
                    <?php if (!$_smarty_tpl->tpl_vars['ja']->value&&$_smarty_tpl->tpl_vars['prijavljenAdmin']->value==false){?>
                    <?php if (!$_smarty_tpl->tpl_vars['ocenio']->value&&!$_smarty_tpl->tpl_vars['drugiMajstor']->value){?>

                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <form action="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" method="POST">
                                <div class="w3-margin-top">
                                    <h3><i class="fa fa-thumbs-o-up"></i> Ocenite ovog majstora</h3>
                                </div>

                                <x-star-rating name="ocena" id="ocenaRate" value="0" number="10"></x-star-rating>
                                <input type="hidden" id="ocenaStar" name="ocenaStar" value="nema">
                                <script src="tpl/StarRating.js"></script>
                                <script>
                                ocenaRate.addEventListener('rate', () => {
                                    var el = document.getElementById("ocenaStar");
                                    el.value = ocenaRate.value;
                                });
                                </script>


                                <div>
                                    <label style="color: green"><i class="fa fa-plus"></i> Pozitivne strane</label>
                                    <input class="w3-input w3-border" type="text" name="txtKomPoz" placeholder="Vaš komentar o majstoru" required>
                                </div>

                                <br>

                                <div>
                                    <label style="color: red"><i class="fa fa-minus"></i> Negativne strane</label>
                                    <input class="w3-input w3-border" type="text" name="txtKomNeg" placeholder="Vaš komentar o majstoru" required>
                                </div>
                                <input type="hidden" name="hdnMejl" value="<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
"
                                       <br><br>
                                <button type="submit" name="btnObjavi" class="w3-button w3-red"><i class="fa fa-pencil"></i>  Objavi</button> 
                            </form>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <?php if ($_smarty_tpl->tpl_vars['drugiMajstor']->value){?>
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2><i class="fa fa-thumbs-o-up"></i> Nemate mogućnost da dajete ocene drugim majstorima </h2>
                        </div>
                    </div>

                    <?php }else{ ?>
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2><i class="fa fa-thumbs-o-up"></i> Već ste ocenili ovog majstora!</h2>
                        </div>
                    </div>

                    <?php }?>
                    <?php }?>
                    <?php }?>
                </div>


                <div class="w3-row-padding w3-half">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <div class="w3-margin-top">
                                <h3><i class="fa fa-commenting-o"></i> Komentari koje su ostavili drugi korisnici</h3>
                            </div>
                            <?php  $_smarty_tpl->tpl_vars['kom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstor']->value->komentari; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kom']->key => $_smarty_tpl->tpl_vars['kom']->value){
$_smarty_tpl->tpl_vars['kom']->_loop = true;
?>
                            <div class="w3-container w3-margin-top">
                                <h3><?php echo $_smarty_tpl->tpl_vars['kom']->value->posiljaoc;?>
</h3>
                                <h6 style="color: green"><i class="fa fa-plus"></i>   <?php echo $_smarty_tpl->tpl_vars['kom']->value->komentar_tekst_pozitivan;?>
 </h6>
                                <h6 style="color: red"><i class="fa fa-minus"></i>  <?php echo $_smarty_tpl->tpl_vars['kom']->value->komentar_tekst_negativan;?>
</h6>
                            </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                
                <div class="w3-row-padding w3-quarter">
                    <div class="w3-card w3-round w3-white">
                        <label class="w3-button w3-block w3-red"><i class="fa fa-calendar-o"></i> Planer</label>
                            <div class="w3-panel">
                                <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                              
                                 <a href="#" onclick="document.getElementById('id40').style.display = 'block'" style="text-decoration: none" class="w3-button w3-block w3-light-grey"><i class="fa fa-calendar-check-o"></i> Dodaj događaj</a>
                                
                                 <hr>
                                 
                                
                                       <?php }?>
                                       <?php  $_smarty_tpl->tpl_vars['datum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datumi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datum']->key => $_smarty_tpl->tpl_vars['datum']->value){
$_smarty_tpl->tpl_vars['datum']->_loop = true;
?>
                                       <div>
                                         
                                          <p> <label class="w3-light-grey"><?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
<label></p>
                                                      <?php  $_smarty_tpl->tpl_vars['dogadjaj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dogadjaj']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['db']->value->vratiDogadjaje($_smarty_tpl->tpl_vars['datum']->value,$_smarty_tpl->tpl_vars['majstor']->value->majstor_Email); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dogadjaj']->key => $_smarty_tpl->tpl_vars['dogadjaj']->value){
$_smarty_tpl->tpl_vars['dogadjaj']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['dogadjaj']->key;
?>
                                                        <form action="planer.php" method="POST">
                                                        <p><label class="fa fa-clock-o"> <?php echo $_smarty_tpl->tpl_vars['dogadjaj']->value->vreme;?>
 </label>
                                                            <?php echo $_smarty_tpl->tpl_vars['dogadjaj']->value->opisDogadjaja;?>

                                                            <?php if ($_smarty_tpl->tpl_vars['ja']->value){?>
                                                           
                                                            <input type="submit" class="w3-small w3-button w3-red pull-right" name="sbmObrisiDogadjaj" value="Obriši">
                                                            <input type="hidden" name="hdnDogadjaja" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                                            <?php }?>
                                                        </p>
                                                        </form>
                                                       
                                                      <hr>
                                                      <?php } ?>
                                                      
                                       </div>
                                       <?php } ?>
                                       
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
                    <h2>Prijavi profil?</h2>
                    <p>Da li ste sigurni da želite da se prijavite ovaj profil kao nepoželjni sadržaj?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="prijaviProfil.php" method="post">
                        <input type="hidden" name="klijentId" value="<?php echo $_smarty_tpl->tpl_vars['imejl']->value;?>
">
                        <p>Zbog čega želite da prijavite ovaj profil kao nepoželjni sadržaj?</p>
                        <input type="text" name="razlog" class="w3-input w3-card w3-light-grey">
                        <br>
                        <button onclick="document.getElementById('id20').style.display = 'none'; document.getElementById('id30').style.display = 'block'" type="submit" name="submit" class="w3-button w3-red w3-half"><i class="fa fa-exclamation-triangle"></i> Da</button>
                        <span onclick="document.getElementById('id20').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>   
                        <br>
                        <hr>
                    </form>

                </div>

            </div>
        </div>

        <!-- Modal Novi dogadjaj-->
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

        <!-- Modal Vrsta korisnika-->
        <div id="id40" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id40').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Dodavanje novog događaja</h2>
                    
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="planer.php" method="post">
                                <label>Dodajte događaj u planer</label>
                                
                                <p>Izaberite datum</p>
                                <input type="date" name="datum" class="w3-input w3-block w3-border">
                                <p>Unesite naziv događaja</p>
                                <input type="text" name="naziv" class="w3-input w3-block w3-border">
                                <p>Unesite vreme</p>
                                <input type="text" name="vreme" class="w3-input w3-block w3-border">
                                <hr>
                                 <p><input type="submit" name="sbmDodajUPlaner" value="Dodaj" class="w3-button w3-green w3-block"></p>
                                 
                                </form>
                    <hr>
                </div>


                <footer class="w3-container w3-black">
                    <span name="btnOdustani" onclick="document.getElementById('id40').style.display = 'none'" 
                          class="w3-button w3-red "><i class="fa fa-remove"></i> Odustani</span>
                </footer>

            </div>
        </div>
        
    </body>
</html><?php }} ?>