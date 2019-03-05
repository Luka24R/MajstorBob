<?php /* Smarty version Smarty-3.1.13, created on 2018-06-17 19:18:35
         compiled from "tpl\modalBrisanje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25135b26b314e83bb9-05220488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f4bd8ad5b8b06e32eb4e91244fe855466dd46f' => 
    array (
      0 => 'tpl\\modalBrisanje.tpl',
      1 => 1529263112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25135b26b314e83bb9-05220488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b26b314ed81f5_30440556',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b26b314ed81f5_30440556')) {function content_5b26b314ed81f5_30440556($_smarty_tpl) {?><html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body>  
<div id="id02" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id02').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Obriši profil</h2>
                    <p>Da li ste sigurni da želite da obrišete profil?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="actionBrisanje.php" method="POST">

                        <button type="submit" name="btnDaOdjava" class="w3-button w3-half w3-red"><i class="fa fa-remove"></i> Da</button>
                        <span onclick="document.getElementById('id02').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>
                        <br>
                        <br>
                    </form>
                </div>

            </div>
        </div>
    </body><?php }} ?>