<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 07:01:19
         compiled from "tpl\porukeAdmina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86695b29f4f9741326-82629102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3808962321c3491965aebd0b36e28c6e9739bd' => 
    array (
      0 => 'tpl\\porukeAdmina.tpl',
      1 => 1529478073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86695b29f4f9741326-82629102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b29f4f98ee8e8_14337293',
  'variables' => 
  array (
    'poruke' => 0,
    'email' => 0,
    'da' => 0,
    'ime' => 0,
    'porukice' => 0,
    'msg' => 0,
    'emailM' => 0,
    'emailKorisnika' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b29f4f98ee8e8_14337293')) {function content_5b29f4f98ee8e8_14337293($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="tpl/style.css">
    <link rel="stylesheet" href="tpl/index.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"


          <body>

        <!-- Side Navigation -->
          <!-- Side Navigation -->
        

        <!-- Overlay effect when opening the side navigation on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

        <!-- Page content -->
        <div class="w3-main" style="margin-top: 60px; height:100%">
            
            <nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar"><a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
                                                                                                                                                             class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
            <!--<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a>-->

            <a href="novaPoruka.php" class="w3-button w3-block w3-light-grey">Napiši novu poruku<i class="w3-padding fa fa-pencil"></i></a>
            <br>
            <label class="label label-danger w3-red">Prijemno sanduče <i class="fa fa-inbox w3-margin-right"></i></label>
            <!--<a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Inbox (3)<i class="fa fa-caret-down w3-margin-left"></i></a>-->
            <br>
            <hr>
            <?php  $_smarty_tpl->tpl_vars['email'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['email']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poruke']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['email']->key => $_smarty_tpl->tpl_vars['email']->value){
$_smarty_tpl->tpl_vars['email']->_loop = true;
?>
            <form action="inboxAdmina.php" method="POST">
                <div class="w3-container">
                   
                    <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h5>
                     <input class="w3-button w3-block w3-red" type="submit" name="sbmRazgovor" value="Prikaži">
                    <input class="w3-button w3-block w3-red" type="hidden" name="emailKorisnika" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
                   
                    
                   
                </div>
                <br>
                <hr style="border: 1px solid lightgray">
            </form>
            <?php } ?>

        </nav>

     <div class="w3-main" style="margin-left:320px; height:100%">

            <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
            <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display = 'block'"><i class="fa fa-pencil"></i></a>

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
                        
                        <?php if ($_smarty_tpl->tpl_vars['msg']->value->posiljaoc=="majstor"&&$_smarty_tpl->tpl_vars['msg']->value->majstor_email0=="admin"){?>
                        
                        <h6>Admin</h6>
                        
                        
                        <?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['msg']->value->posiljaoc=="musterija"&&$_smarty_tpl->tpl_vars['msg']->value->musterija_email1=="admin"){?>
                        <h6>Admin</h6>
                        <?php }else{ ?>
                        <h6><?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
</h6>

                        <?php }?>
                        <?php }?>

                        

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

                <form action="inboxAdmina.php" method="POST">
                    <div class="send-wrap ">

                        <label>Poruka</label>
                        <input class="w3-input w3-border w3-margin-bottom" style="height:60px" placeholder="Ovde unesite Vašu poruku" name="txtPoruka">


                    </div>
                    <div class="btn-panel">

                        <!--<a href="inbox.php?emailMajstora=<?php echo $_smarty_tpl->tpl_vars['emailM']->value;?>
" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Posalji poruku</a>
                        -->
                        <button class="w3-button w3-red w3-right" onclick="document.getElementById('id01').style.display = 'none'" name="sbmPosaljiPoruku" type="submit">Pošalji  <i class="fa fa-paper-plane"></i></button> 
                        <input type="hidden" name="emailKorisnika" value=<?php echo $_smarty_tpl->tpl_vars['emailKorisnika']->value;?>
>
                    </div>
                </form>

            </div>
            <?php }?>

            <!--<div id="Borge" class="w3-container person">
              <br>
              <img class="w3-round  w3-animate-top" src="/w3images/avatar3.png" style="width:20%;">
              <h5 class="w3-opacity">Subject: Remember Me</h5>
              <h4><i class="fa fa-clock-o"></i> From Borge Refsnes, Sep 27, 2015.</h4>
              <a class="w3-button w3-light-grey" href="#">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
              <a class="w3-button w3-light-grey" href="#">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
              <hr>
              <p>Hello, i just wanted to let you know that i'll be home at lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p>Best Regards, <br>Borge Refsnes</p>
            </div>-->


        </div>
        </div>
        <script>
            var openInbox = document.getElementById("myBtn");
            openInbox.click();

            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }
            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            function myFunc(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-red";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                    x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-red", "");
                }
            }

            openMail("Borge")
            function openMail(personName) {
                var i;
                var x = document.getElementsByClassName("person");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x = document.getElementsByClassName("test");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" w3-light-grey", "");
                }
                document.getElementById(personName).style.display = "block";
                event.currentTarget.className += " w3-light-grey";
            }
        </script>

        <script>
            var openTab = document.getElementById("firstTab");
            openTab.click();
        </script>

    </body>
</html> 
<?php }} ?>