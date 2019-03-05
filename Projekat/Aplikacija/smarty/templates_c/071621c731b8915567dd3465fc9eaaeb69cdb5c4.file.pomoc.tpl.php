<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 09:01:39
         compiled from "tpl\pomoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237395b12c339f14c81-34056624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071621c731b8915567dd3465fc9eaaeb69cdb5c4' => 
    array (
      0 => 'tpl\\pomoc.tpl',
      1 => 1529474554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237395b12c339f14c81-34056624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b12c33a0f5788_96920674',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b12c33a0f5788_96920674')) {function content_5b12c33a0f5788_96920674($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MajstorBOB | Pomoć</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="tpl/index.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    </head>
    <body>

        <div class="w3-container" id="contact" style=" margin-top: 50px;height:100%">
            <h2>Pomoć</h2>
            <p>Postavite pitanje administratoru ukoliko imate bilo koje nedoumice.</p>
            <form action="pomoc.php" method="POST" >
               <!-- <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Vaše ime" required name="Ime"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Vaša imejl adresa" required name="Imejl"></p>-->
                <p><input class="w3-input w3-padding-16 w3-border" type="text" name="PorukaZaAdmina" placeholder="Vaša poruka" required name="Poruka"></p>
                <p><button class="w3-button w3-black w3-padding-large" name="sbmPosaljiAdminu" type="submit">POŠALJI PORUKU</button></p>
            </form>
        </div>


    </body>
</html><?php }} ?>