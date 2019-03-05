<?php /* Smarty version Smarty-3.1.13, created on 2018-06-03 12:55:26
         compiled from "tpl\inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66465b0c2d66f00694-51004178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9573a5406189ba16a6b535a79e51907ada3d62' => 
    array (
      0 => 'tpl\\inbox.tpl',
      1 => 1528030447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66465b0c2d66f00694-51004178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b0c2d66f40a10_59163988',
  'variables' => 
  array (
    'poruke' => 0,
    'razgovor' => 0,
    'da' => 0,
    'ime' => 0,
    'display' => 0,
    'porukice' => 0,
    'msg' => 0,
    'emailM' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c2d66f40a10_59163988')) {function content_5b0c2d66f40a10_59163988($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>MajstorBOB | Poruke</title>
        <link rel="stylesheet" href="tpl/index.css">
    </head>
<body>
    
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-cogs w3-margin-right"></i>MajstorBob</a>
    <a href="profil.php" class="w3-bar-item w3-button w3-mobile">Moj profil</a>
    <a href="inbox.php" class="w3-bar-item w3-button w3-mobile">Poruke</a>
    <a href="pomoc.php" class="w3-bar-item w3-button w3-mobile">Pomoć</a>
    <a href="kontakt.php" class="w3-bar-item w3-button w3-mobile">O nama</a>
    <a href="#contact" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Uloguj se</a>
    <a href="registrovanjeMusterija.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Prijavi se</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} 
</script>
<!--<head>
<link rel="stylesheet" type="text/css" href="tpl/inbox.css">
</head>


<h2>Poruke</h2>
<?php  $_smarty_tpl->tpl_vars['razgovor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['razgovor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poruke']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['razgovor']->key => $_smarty_tpl->tpl_vars['razgovor']->value){
$_smarty_tpl->tpl_vars['razgovor']->_loop = true;
?>
<form action="">
<div class="container">
  <img src="tpl/worker.png" alt="Avatar" style="width:100%;">
  <p><?php echo $_smarty_tpl->tpl_vars['razgovor']->value->majstor_email0;?>
</p>
  <p><?php echo $_smarty_tpl->tpl_vars['razgovor']->value->tekst_poruke;?>
 <?php echo $_smarty_tpl->tpl_vars['razgovor']->value->datum_slanja_poruke;?>
</p>
  <button type="button" class="btn-right">Sve Poruke</button>
  <!--<span class="time-left">11:00</span>
</div>
</form>
<?php } ?>-->
  <!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
-->

<!------ Include the above in your HEAD tag ---------->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-panel btn-panel-conversation">
                <a href="" class="btn  col-lg-6 send-message-btn " role="button"><i class="fa fa-search"></i> Search</a>
                <a href="" class="btn  col-lg-6  send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Nova poruka</a>
            </div>
        </div>

       
    </div>
    <div class="row">

        <div class="conversation-wrap col-lg-3">

        <?php  $_smarty_tpl->tpl_vars['razgovor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['razgovor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poruke']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['razgovor']->key => $_smarty_tpl->tpl_vars['razgovor']->value){
$_smarty_tpl->tpl_vars['razgovor']->_loop = true;
?>
        <form action="inbox.php" method="POST">
            <div class="media conversation" onclick="myFunction()">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['razgovor']->value->majstor_email0;?>
</h5>
                            <input type="submit" name="sbmRazgovor" value="Prikaži">
                            <input type="hidden" name="majstorEmail" value=<?php echo $_smarty_tpl->tpl_vars['razgovor']->value->majstor_email0;?>
>
                        </div>
                    </div>
        </form>
        <?php } ?>
           
        </div>


        <?php if ($_smarty_tpl->tpl_vars['da']->value){?>
        <div class="message-wrap col-lg-8">
            <div class="msg-wrap">


                <div class="media msg" style="background-color: skyblue" >
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                    </a>
                    <div class="media-body" >
                        <small class="pull-right time"><i class="fa fa-clock-o"></i> Razgovor</small>
                        <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
</h5>
                        <small class="col-lg-10">
                            <p><?php echo $_smarty_tpl->tpl_vars['display']->value;?>
</p>
                        </small>
                    </div>
                    
                </div>
                <?php if ('porukice'!=null){?>
                <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['porukice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
                    <div class="media msg">
                        <?php if ($_smarty_tpl->tpl_vars['msg']->value->posiljaoc=="majstor"){?>
                        <h6><?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
</h6>
                        
                   
                        <?php }else{ ?>
                        <h6>ja</h6>
                
                         <?php }?>
                            
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                    </a>    
                            
                            <small class="col-lg-10"><?php echo $_smarty_tpl->tpl_vars['msg']->value->tekst_poruke;?>
</small>
                            <div class="media-body">
                            <small class="pull-right time"><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['msg']->value->datum_slanja_poruke;?>
</small>
                            </div>
                    </div>
                <?php } ?>
                <?php }?>
                
               
            </div>
            
            <form action="inbox.php" method="POST">
                <div class="send-wrap ">

                    <textarea class="form-control send-message" name="txtPoruka" rows="3" placeholder="Napišite odgovor..."></textarea>


                </div>
                <div class="btn-panel">

                    <!--<a href="inbox.php?emailMajstora=<?php echo $_smarty_tpl->tpl_vars['emailM']->value;?>
" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Posalji poruku</a>
                    -->
                    <input type="submit" name="sbmPosaljiPoruku" value="Pošalji poruku"> 
                    <input type="hidden" name="emailMajstora" value=<?php echo $_smarty_tpl->tpl_vars['emailM']->value;?>
>
                </div>
            </form>

        </div>
        <?php }?>
               
    </div>
               
</div>
               


</body>
</html>
<?php }} ?>