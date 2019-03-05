<?php /* Smarty version Smarty-3.1.13, created on 2018-06-19 21:33:37
         compiled from "tpl\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204545b2845daf03dc4-08243205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71545145354e107bcef9c3fe2c9b517087988c7' => 
    array (
      0 => 'tpl\\admin.tpl',
      1 => 1529443840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204545b2845daf03dc4-08243205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b2845db3388e3_19244670',
  'variables' => 
  array (
    'prijavljeniProfili' => 0,
    'key' => 0,
    'isMajstor' => 0,
    'pm' => 0,
    'prijavljeniOglasi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2845db3388e3_19244670')) {function content_5b2845db3388e3_19244670($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MajstorBOB | Upravljaj portalom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="tpl/index.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    </head>
    <body style="">

        <div class="w3-container w3-light-gray" id="contact" style=" margin-top: 50px; height:100%">
            <h2>Upravljaj portalom</h2>
            <p>Odavde možete upravljati neželjenim sadržajem sa portala</p>
            <div class="w3-row w3-half">
                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-user-o"></i> Profili koji su prijavljeni</h3>
                </div>
                <div class="w3-row-padding w3-padding-16">
                    <div class="w3-responsive">
                        <table class="w3-table-all">
                            <tr class="w3-black">
                                <th>Spisak profila</th>
                                <th>Razlog</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prijavljeniProfili']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value){
$_smarty_tpl->tpl_vars['pm']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pm']->key;
?>
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['isMajstor']->value[$_smarty_tpl->tpl_vars['key']->value]==true){?>
                                <td><a href="profil.php?worker=<?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogProfila;?>
" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-user-o" style="color:green"></i> Profil ID: <?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogProfila;?>
</a></td>
                                <?php }else{ ?>
                                <td><a href="profil.php?client=<?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogProfila;?>
" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-user-o" style="color:green"></i> Profil ID: <?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogProfila;?>
</a></td>
                                <?php }?>
                                <td><?php echo $_smarty_tpl->tpl_vars['pm']->value->razlog;?>
</td>
                                
                            </tr>
                            <?php } ?>                            
                            
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="w3-row w3-half">
                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-newspaper-o"></i> Oglasi koji su prijavljeni</h3>
                </div>
                <div class="w3-row-padding w3-padding-16">
                    <div class="w3-responsive">
                        <table class="w3-table-all">
                            <tr class="w3-black">
                                <th>Spisak profila</th>
                                <th>Razlog</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prijavljeniOglasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value){
$_smarty_tpl->tpl_vars['pm']->_loop = true;
?>
                            <tr>

                                <td><a href="actionProfilOglasa.php?hdnId=<?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogOglasa;?>
" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-file-o" style="color:green"></i> Oglas ID: <?php echo $_smarty_tpl->tpl_vars['pm']->value->idPrijavljenogOglasa;?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pm']->value->razlog;?>
</td>
                            </tr>
                            <?php } ?> 
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html><?php }} ?>