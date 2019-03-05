<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 21:07:46
         compiled from "tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262455b0d98e0f09c68-48483425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db97a3f8af80d260372ece8474eb31d980e7a586' => 
    array (
      0 => 'tpl\\index.tpl',
      1 => 1529528852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262455b0d98e0f09c68-48483425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b0d98e10e16c5_12015924',
  'variables' => 
  array (
    'zanati' => 0,
    'zanat' => 0,
    'lokacije' => 0,
    'lokacija' => 0,
    'prijavljen' => 0,
    'imaSlika' => 0,
    'slika' => 0,
    'najboljeOcenjen' => 0,
    'lok' => 0,
    'zan' => 0,
    'ocenjen' => 0,
    'onlineMajstor' => 0,
    'oM' => 0,
    'l' => 0,
    'z' => 0,
    'oglasi' => 0,
    'id' => 0,
    'oglas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d98e10e16c5_12015924')) {function content_5b0d98e10e16c5_12015924($_smarty_tpl) {?><!DOCTYPE html>
<html>
<title>MajstorBOB | Početna strana</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<link rel="stylesheet" href="tpl/style.css">
<link rel="stylesheet" href="tpl/index.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1600px; margin-top: 20px;">
    <img class="w3-image" src="slike/bob1.png" alt="The Hotel" style="min-width:1000px" width="1600" height="800">
    <div class="w3-display-left w3-padding w3-col l6 m8">
        <div class="w3-container w3-red">
            <h2><i class="fa fa-wrench w3-margin-right"></i>Pronađi slobodne majstore</h2>
        </div>
        <div class="w3-container w3-white w3-padding-16">
            <form action="vratiMajstore.php" method="GET">

                <div class="w3-row-padding" style="margin:8px -16px;">
                    
                    <div class="w3-half w3-margin-bottom">
                        <!--<label><i class="fa fa-wrench"></i> Kategorija posla</label>
                        <input class="w3-input w3-border" type="text" placeholder="Građevina, elektronika, stolarija..." name="kategorijaPosla" required>
                        -->
                        <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                        <select name="selKategorija" class="w3-select w3-border">
                            <?php  $_smarty_tpl->tpl_vars['zanat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zanat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zanati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zanat']->key => $_smarty_tpl->tpl_vars['zanat']->value){
$_smarty_tpl->tpl_vars['zanat']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['zanat']->value->tip;?>
"><?php echo $_smarty_tpl->tpl_vars['zanat']->value->tip;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa fa-map"></i> Grad</label>
                        <select name="selLokacija" class="w3-select w3-border">
                            <?php  $_smarty_tpl->tpl_vars['lokacija'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lokacija']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lokacije']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lokacija']->key => $_smarty_tpl->tpl_vars['lokacija']->value){
$_smarty_tpl->tpl_vars['lokacija']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['lokacija']->value->mesto;?>
"><?php echo $_smarty_tpl->tpl_vars['lokacija']->value->mesto;?>
</option>
                            <?php } ?>
                        </select>
                        
                    </div>
                    
                </div>
                
                <div class="w3-row-padding" style="margin:8px -16px;">
                    
                    
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa fa-question"></i> Potreban izlazak na teren</label>
                        <p><input type="radio" name="izlazakNaTeren" value="DA" required> Da
                            <input style="margin-left: 10px" type="radio" name="izlazakNaTeren" value="NE"> Ne</p>
                    </div>
                    
                    <div class="w3-half w3-margin-bottom">
                        <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
                        <button class="w3-button w3-black w3-right" type="submit" name="sbmPretraziMajstore"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
                        <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-black w3-right"><i class="fa fa-search w3-margin-left"></i> Potraži</a>
                        <?php }?>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px">

    <div class="w3-row-padding">
        
    <div class="w3-container w3-margin-top">
        <h3>Pronađi majstora prema imenu i prezimenu</h3>
    </div>
        <form action="vratiMajstore.php" method="GET">
        <div class="w3-row w3-threequarter">
            <label><i class="fa fa-address-book"></i> Ime i prezime</label>
            <input class="w3-input w3-border" type="text" placeholder="Na primer Petar Petrović..." name="majstorIme" required="">
        </div>
        <div class="w3-row w3-quarter">
            <label><i class="fa fa-search"></i> Potraži</label>
            <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
            <button class="w3-button w3-block w3-black" name="sbmPotraziPoImenu">Potraži</button>
            <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black">Potraži</a>
                        <?php }?>
        </div>
        </form>
    </div>

    <div class="w3-row w3-third">
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-thumbs-o-up"></i> Najbolje ocenjeni majstor</h3>
    </div>

    <div class="w3-row-padding w3-padding-16">
        <div class="w3-margin-bottom">
            <?php if ($_smarty_tpl->tpl_vars['imaSlika']->value){?>
             <img src="<?php echo $_smarty_tpl->tpl_vars['slika']->value;?>
" alt="Majstor" style="width:100%">
            <?php }else{ ?>
            <img src="slike/luka.jpg" alt="Majstor" style="width:100%">
            <?php }?>
            <div class="w3-container w3-white">
                <!--<h3><?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->prezime;?>
</h3>-->
                <?php if ($_smarty_tpl->tpl_vars['najboljeOcenjen']->value->online){?>
                <h3><span style="color:green"><i class="fa fa-circle"></i></span> <?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->prezime;?>
</h3>
                <?php }else{ ?>
                <h3><span style="color:red"><i class="fa fa-circle"></i></span> <?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->prezime;?>
</h3>
                <?php }?>
                
                <h6 class="w3-opacity"><?php  $_smarty_tpl->tpl_vars['lok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->lokacije; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lok']->key => $_smarty_tpl->tpl_vars['lok']->value){
$_smarty_tpl->tpl_vars['lok']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['lok']->value->mesto;?>
 <?php } ?></h6>
                <p><?php  $_smarty_tpl->tpl_vars['zan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->zanati; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zan']->key => $_smarty_tpl->tpl_vars['zan']->value){
$_smarty_tpl->tpl_vars['zan']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['zan']->value->tip;?>
 <?php } ?></p>
                
                <div class="w3-container w3-red">
                    <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> <?php echo $_smarty_tpl->tpl_vars['ocenjen']->value->ocena;?>
</label></h2>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
                <a href="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['najboljeOcenjen']->value->majstor_Email;?>
" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user w3-margin-left"></i> Prikaži profil</a>
                <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user w3-margin-left"></i> Prikaži profil</a>
                        <?php }?>
            </form>
            </div>
        </div>

    </div>
</div>
    <div class="w3-row w3-twothird">
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-user-o"></i> Trenutno prijavljeni majstori</h3>
    </div>
    <div class="w3-row-padding w3-padding-16">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr class="w3-black">
                    <th>Ime i prezime</th>
                    <th>Lokacija</th>
                    <th>Kategorija</th>
                    <th>Ocena</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['oM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oM']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['onlineMajstor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oM']->key => $_smarty_tpl->tpl_vars['oM']->value){
$_smarty_tpl->tpl_vars['oM']->_loop = true;
?>
                <tr>
                    
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
                        <a href="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['oM']->value->majstor_Email;?>
" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-circle" style="color:green"></i>  <?php echo $_smarty_tpl->tpl_vars['oM']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['oM']->value->prezime;?>
</a>
                        <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-circle" style="color:green"></i>  <?php echo $_smarty_tpl->tpl_vars['oM']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['oM']->value->prezime;?>
</a>
                        <?php }?>
                    </td>
                    <td><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oM']->value->lokacije; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['l']->value->mesto;?>
 | <?php } ?></td>
                    <td><?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oM']->value->zanati; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['z']->value->tip;?>
 <?php } ?></td>
                    <?php if ($_smarty_tpl->tpl_vars['oM']->value->ocena==null){?>
                    <td>Neocenjen</td>
                    <?php }else{ ?>
                    <td><?php echo $_smarty_tpl->tpl_vars['oM']->value->ocena;?>
</td>
                    <?php }?>
                </tr>
                <?php } ?>
                
            </table>
        </div>
    </div>
    </div>
    
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-newspaper-o"></i> Najnoviji oglasi</h3>
    </div>

    <div class="w3-row-padding w3-padding-16 w3-centered">
        <?php  $_smarty_tpl->tpl_vars['oglas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oglas']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oglasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oglas']->key => $_smarty_tpl->tpl_vars['oglas']->value){
$_smarty_tpl->tpl_vars['oglas']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['oglas']->key;
?>
        <form action="actionProfilOglasa.php" method="GET">
            <input type="hidden" name="hdnId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <div class="w3-quarter w3-margin-bottom">
                <img src="slike/oglas3.jpg" alt="oglas" style="width:100%">
                <div class="w3-container w3-white">
                <h3><?php echo $_smarty_tpl->tpl_vars['oglas']->value->vrsta_posla;?>
</h3>
                <h6 class="w3-opacity"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->datum;?>
</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['oglas']->value->mesto;?>
</p>
                <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
                <button class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-file-o w3-margin-left"></i> Prikaži oglas</button>
                <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-file-o w3-margin-left"></i> Prikaži oglas</a>
                        <?php }?>
                </div>
                </div>
        </form>
        <?php } ?>
        
    </div>
    <div class="w3-container w3-margin-top">
        <form action="pretrazivanjeOglasa.php" method="post">
            <?php if ($_smarty_tpl->tpl_vars['prijavljen']->value){?>
            <button type="submit" name="btnOglasi" class="w3-button w3-block w3-red w3-mobile"><i class="fa fa-align-justify w3-margin-left"></i> Prikaži sve oglase</button>
            <?php }else{ ?>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-red w3-mobile"><i class="fa fa-align-justify w3-margin-left"></i> Prikaži sve oglase</a>
                        <?php }?>
        </form>
    </div>
    <!-- End page content -->
</div>

<!-- Modal Prijavi se-->
        <div id="id10" class="w3-modal">
            <div class="w3-modal-content">

                <header class="w3-container w3-red"> 
                    <span onclick="document.getElementById('id10').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Nije moguće pristupanje ovom sadržaju ukoliko niste prijavljeni</h2>
                    
                    <p>Da biste nastavili, Prijavite se ili se registrujte.</p>
                </header>

                    <div class="w3-container">
                        <hr>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'none'; document.getElementById('id01').style.display = 'block'" class="w3-button w3-half w3-grayscale-max" style="text-decoration: none"><i class="fa fa-user w3-margin-left"></i> Prijavi se</a>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'none'; document.getElementById('id03').style.display = 'block'" class="w3-button w3-half w3-grayscale-max" style="text-decoration: none"><i class="fa fa-user w3-margin-left"></i> Registruj se</a>
                        <br>
                        <hr>
                    </div>
                        <footer class="w3-container w3-black">
                        <span name="btnOdustani" onclick="document.getElementById('id10').style.display = 'none'" 
                              class="w3-button w3-red "><i class="fa fa-remove"></i> Odustani</span>
                        </footer>

            </div>
        </div>


</body>
</html>
<?php }} ?>