<?php /* Smarty version Smarty-3.1.13, created on 2018-06-20 19:57:33
         compiled from "tpl\zaboravljenaLozinka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183095b0c32ced82c00-93384001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8daa5af942995bf9967a3bf769ebc6325c586b0' => 
    array (
      0 => 'tpl\\zaboravljenaLozinka.tpl',
      1 => 1529524651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183095b0c32ced82c00-93384001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b0c32cee31352_55220212',
  'variables' => 
  array (
    'p' => 0,
    'hintPitanje' => 0,
    'email' => 0,
    'sifra' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c32cee31352_55220212')) {function content_5b0c32cee31352_55220212($_smarty_tpl) {?><html>
    <head>
      <title>MajstorBOB | Zaboravljena lozinka</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tpl/style.css">
<link rel="stylesheet" href="tpl/index.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {padding: 16px}
</style>
<body>

  <div class="w3-modal-content" style=" margin-top: 50px;height:100%">
    
    <div class="w3-panel">
        <?php if ($_smarty_tpl->tpl_vars['p']->value){?>
        <h2>Zaboravljena lozinka</h2>
        <hr>
        <label>Unesite odgovor na vaše sigurnosno pitanje</label>
            <p><?php echo $_smarty_tpl->tpl_vars['hintPitanje']->value;?>
</p>
      
            <form action="actionZaboravljenaLozinka.php" method="POST">
      
      <input name="odgovor" class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="Ovde unesite vaš odgovor">
      <div class="w3-section">
        
    

      <input type="hidden" name="hdnEmail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
      
      <button type="submit" name='vratiSifru' 
                            class="w3-button w3-red w3-middle"><i class="fa fa-paper-plane"></i> Zaboravljena sifra</button>
      </form>
      <?php }else{ ?>
      <h2>Vasa sifra je:</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['sifra']->value;?>
</p>
        
            <br>

      <?php }?>
      </div>    
    </div>
  </div>
    </body>
</html><?php }} ?>