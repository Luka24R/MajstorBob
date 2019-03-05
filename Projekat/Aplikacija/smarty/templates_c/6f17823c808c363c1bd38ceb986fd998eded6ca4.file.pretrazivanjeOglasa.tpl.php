<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 19:24:18
         compiled from "tpl\pretrazivanjeOglasa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73895b20f76397b8e3-21504381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f17823c808c363c1bd38ceb986fd998eded6ca4' => 
    array (
      0 => 'tpl\\pretrazivanjeOglasa.tpl',
      1 => 1529522650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73895b20f76397b8e3-21504381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b20f763b53a26_13033313',
  'variables' => 
  array (
    'zanati' => 0,
    'zanat' => 0,
    'lokacije' => 0,
    'lokacija' => 0,
    'oglasi' => 0,
    'oglas' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b20f763b53a26_13033313')) {function content_5b20f763b53a26_13033313($_smarty_tpl) {?><html>
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

    <body class="w3-light-grey" style="margin-top: 50px">


        <div class="w3-container">
            <div class="w3-row w3-quarter" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
                <form action="pretrazivanjeOglasa.php" method="post">
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
                        <label><i class="fa fa-gavel"></i> Kategorija oglasa za posao</label>
                        <select name="selZanat" class="w3-select w3-border">

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
                        <select name="selGrad" class="w3-select w3-border">

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
                    <button class="w3-button w3-block w3-red" type="submit" name="sbmPretrazi" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
                </form>

            </div>



            <div class="w3-row w3-threequarter">

                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-thumbs-o-up"></i> Pronađeni oglasi</h3>
                </div>
                <?php  $_smarty_tpl->tpl_vars['oglas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oglas']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oglasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oglas']->key => $_smarty_tpl->tpl_vars['oglas']->value){
$_smarty_tpl->tpl_vars['oglas']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['oglas']->key;
?>
                <div class="w3-row-padding w3-padding-16 w3-quarter w3-white">

                    <form action="actionProfilOglasa.php">
                        <div class="w3-margin-bottom">

                            <img src="slike/oglas1.jpg" alt="Oglas" style="width:100%">
                            <div class="w3-container w3-white">
                                <p>Potreban zanatlija: <?php echo $_smarty_tpl->tpl_vars['oglas']->value->vrsta_posla;?>
</p>
                                <label class="pull-right"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->datum;?>
</label>
                                <label class="w3-left-align"> <?php echo $_smarty_tpl->tpl_vars['oglas']->value->mesto;?>
</label>
                                <input type="hidden" name="hdnId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <button type="submit" name="sbmPrikaziOglas" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-newspaper-o"></i> Prikaži oglas</button>

                            </div>
                        </div>
                    </form>




                </div>
                <?php } ?>

            </div>
        </div>




    </body>
</html><?php }} ?>