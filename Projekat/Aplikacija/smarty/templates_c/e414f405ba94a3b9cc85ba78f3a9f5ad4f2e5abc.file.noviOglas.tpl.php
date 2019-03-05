<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 18:42:24
         compiled from "tpl\noviOglas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129995b22e9ec2dc9e2-14636572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e414f405ba94a3b9cc85ba78f3a9f5ad4f2e5abc' => 
    array (
      0 => 'tpl\\noviOglas.tpl',
      1 => 1529520140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129995b22e9ec2dc9e2-14636572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b22e9ec3111d6_94611901',
  'variables' => 
  array (
    'zanati' => 0,
    'zanat' => 0,
    'lokacije' => 0,
    'lokacija' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b22e9ec3111d6_94611901')) {function content_5b22e9ec3111d6_94611901($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Objavi oglas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tpl/oglas.css">
        <script src="tpl/myScript.js"></script>
    </head>
    <body>
        <div class="w3-container" style="height:100%; margin-top: 60px;">
            <div class="w3-row">
                        <h3><i class="fa fa-wrench w3-margin-right "></i>Postavite novi oglas</h3>
                        <p>Za objavljivanje novog oglasa na naš portal, popunite sledeća polja.</p>
                        <hr>
                    <form class="" method="POST" action="postaviOglas.php">

                            <div class="w3-bar-item">
                                <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                                <select name="selKat" class="w3-select w3-border w3-margin-bottom">
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

                        <hr>
                            <label for="txtGrad"><i class="fa fa-map"></i>  Odaberite grad</label>
                            <select name="selGrad" class="w3-select w3-border w3-margin-bottom">
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
                            
                            <label for="txtAdresa"><i class="fa fa-home"></i> Unesite adresu</label>
                            <div >
                                <input type="text" class="w3-input w3-border w3-margin-bottom" name="txtAdresa" required=""></textarea>


                            </div>
                            
                            <hr>

                            
                            <label for="txtTekst"><i class="fa fa-align-justify"></i> Unesite tekst oglasa</label>
                                <input type="text" class="w3-input w3-border w3-margin-bottom" style="height: 200px" name="txtTekst" rows="2" required="">

                            <button class="w3-button w3-half w3-green" type="submit" name="sbmKreiraj"><i class="fa fa-check"></i> Objavi</button>
                            <button class="w3-button w3-half w3-red" type="reset" name="reset"><i class="fa fa-close"></i> Poništi unose</button>
                            

                    </form>
            </div>
        </div>
    </body>
</html>
<?php }} ?>