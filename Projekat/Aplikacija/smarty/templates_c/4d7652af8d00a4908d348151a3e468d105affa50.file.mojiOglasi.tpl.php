<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 09:00:33
         compiled from "tpl\mojiOglasi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40635b268068e787b2-69434854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7652af8d00a4908d348151a3e468d105affa50' => 
    array (
      0 => 'tpl\\mojiOglasi.tpl',
      1 => 1529444868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40635b268068e787b2-69434854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b268068f24f37_86844243',
  'variables' => 
  array (
    'prijavljenMusterija' => 0,
    'prijavljenMajstor' => 0,
    'oglasi' => 0,
    'oglas' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b268068f24f37_86844243')) {function content_5b268068f24f37_86844243($_smarty_tpl) {?><html>
    <head>
        <title>MajstorBOB </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="w3-light-grey" style="margin-top: 50px;height:100%">

        <div class="w3-container w3-margin-top">
            
            <?php if ($_smarty_tpl->tpl_vars['prijavljenMusterija']->value){?>
            <h3><i class="fa fa-newspaper-o"></i> Vaši oglasi</h3>
            <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['prijavljenMajstor']->value){?>
            <h3><i class="fa fa-newspaper-o"></i> Vaše prijave za posao</h3>
            <?php }?>
            <?php }?>
        </div>

        <div class="w3-row-padding w3-padding-16">
            <?php  $_smarty_tpl->tpl_vars['oglas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oglas']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oglasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oglas']->key => $_smarty_tpl->tpl_vars['oglas']->value){
$_smarty_tpl->tpl_vars['oglas']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['oglas']->key;
?>
            <div class="w3-quarter w3-margin-bottom">
                <img src="slike/oglas3.jpg" alt="oglas" style="width:100%">
                <div class="w3-container w3-white">
                    <h3><?php echo $_smarty_tpl->tpl_vars['oglas']->value->vrsta_posla;?>
</h3>
                    <h6 class="w3-opacity"><?php echo $_smarty_tpl->tpl_vars['oglas']->value->datum;?>
</h6>
                    <p><?php echo $_smarty_tpl->tpl_vars['oglas']->value->mesto;?>
</p>
                    <form action="actionProfilOglasa.php">
                    <input type="hidden" name="hdnId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <button class="w3-button w3-block w3-black w3-margin-bottom">Prikaži oglas</button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>

    </body>
</html><?php }} ?>