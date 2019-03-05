<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 19:26:53
         compiled from "tpl\pretrazivanjeMajstora.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187155b210a4c6a3876-83794286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53267cc854304f64cdc2817c5a32bed3d71e94b7' => 
    array (
      0 => 'tpl\\pretrazivanjeMajstora.tpl',
      1 => 1529522812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187155b210a4c6a3876-83794286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b210a4c81bc33_89553450',
  'variables' => 
  array (
    'zanati' => 0,
    'zanat' => 0,
    'lokacije' => 0,
    'lokacija' => 0,
    'majstori' => 0,
    'majstor' => 0,
    'lok' => 0,
    'zan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b210a4c81bc33_89553450')) {function content_5b210a4c81bc33_89553450($_smarty_tpl) {?><html>
    <head>
        <title>MajstorBOB | Majstori</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body class="w3-main w3-light-grey" style="margin-top: 50px;">

        <div class="w3-container">
        <div class="w3-row w3-quarter w3-light-gray" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
            <form action="vratiMajstore.php" method="GET">
                <script>
                    function w3_open() {
                        document.getElementById("mySidebar").style.display = "block";
                    }
                    function w3_close() {
                        document.getElementById("mySidebar").style.display = "none";
                    }
                </script>
                <div class="w3-bar-item w3-light-gray">
                    <h4><i class="fa fa-pencil"></i> Izmenite kriterijum pretrage</h4>
                </div>
                <br>

                <div class="w3-bar-item">
                    <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                    <select name="selKat" class="w3-select w3-border">
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
<br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-map"></i> Grad</label>
                    <select name="selLok" class="w3-select w3-border">
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
<br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-question"></i> Potreban izlazak na teren</label>
                    <p><input type="radio" name="radIzlazakNaTeren" value="DA" checked> Da
                        <input style="margin-left: 10px" type="radio" name="radIzlazakNaTeren" value="NE"> Ne</p>
                </div>
<br>
                <button class="w3-button w3-block w3-red" type="submit" name="sbmMajstor" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
            </form>
            <br>
            <div class="w3-bar-item w3-light-gray w3-center">
                    <h4></h4>
                </div>
            <br>
            <form action="vratiMajstore.php" method="GET">
                <div class="w3-bar-item w3-light-gray">
                    <h4><i class="fa fa-search"></i> Pretražite po imenu i prezimenu</h4>
                </div>
                <br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-clock-o"></i> Ime i prezime</label>
                    <input class="w3-input w3-border" type="text" name="majstorIme" required>
                </div>
                <br>
                <button class="w3-button w3-block w3-red" type="submit" name="sbmImePrezime" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
            </form>

        </div>



        <div class="w3-row w3-threequarter">

            <div class="w3-container w3-margin-top">
                <h3><i class="fa fa-thumbs-o-up"></i> Pronađeni majstori</h3>
            </div>
            <?php  $_smarty_tpl->tpl_vars['majstor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['majstor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['majstor']->key => $_smarty_tpl->tpl_vars['majstor']->value){
$_smarty_tpl->tpl_vars['majstor']->_loop = true;
?> 
            <div class="w3-row w3-quarter">

                <div class="w3-margin-bottom w3-white">

                    <?php if ($_smarty_tpl->tpl_vars['majstor']->value->slika!=null){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['majstor']->value->slika;?>
" alt="Majstor" style="width:300px; height: 300px;">
                    <?php }else{ ?>
                    <img src="slike/luka.jpg" alt="Majstor" style="width:300px; height: 300px;">
                    <?php }?>
                    <div class="w3-container w3-white">

                        <?php if ($_smarty_tpl->tpl_vars['majstor']->value->online){?>
                        <h3><span style="color:green"><i class="fa fa-circle"></i></span>  <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['majstor']->value->prezime;?>
</h3>
                        <?php }else{ ?>
                        <h3><span style="color:red"><i class="fa fa-circle"></i></span> <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ime;?>
 <?php echo $_smarty_tpl->tpl_vars['majstor']->value->prezime;?>
</h3>
                        <?php }?>
                        <h6 class="w3-opacity"><?php  $_smarty_tpl->tpl_vars['lok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstor']->value->lokacije; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lok']->key => $_smarty_tpl->tpl_vars['lok']->value){
$_smarty_tpl->tpl_vars['lok']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['lok']->value->mesto;?>
 <?php } ?></h6>
                        <p><?php  $_smarty_tpl->tpl_vars['zan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['majstor']->value->zanati; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zan']->key => $_smarty_tpl->tpl_vars['zan']->value){
$_smarty_tpl->tpl_vars['zan']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['zan']->value->tip;?>
 <?php } ?></p>

                        <div class="w3-container w3-red">
                            <!--<h2><i class="fa fa-star"></i> Ocena<label style="float:right"> <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ocena;?>
</label></h2>-->
                             <?php if ($_smarty_tpl->tpl_vars['majstor']->value->ocena==null){?>
                            <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> X</label></h2>
                            <?php }else{ ?>
                            <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> <?php echo $_smarty_tpl->tpl_vars['majstor']->value->ocena;?>
</label></h2>
                            <?php }?>
                        </div>
                        <a href="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['majstor']->value->majstor_Email;?>
" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user-o"></i> Prikaži profil</a>

                    </div>

                </div>


            </div>
            <?php } ?>
        </div>
        </div>




    </body>
</html><?php }} ?>