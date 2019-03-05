<html>
    <head>
      <title>MajstorBOB | Nova poruka</title>
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
        
        <h2>Nova Poruka</h2>
            <p>Unesite vašu poruku i kliknite na dugme POŠALJI</p>
        
            <br>
      <form action="novaPoruka.php" method="POST">
      <label>Primalac</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" value="[[$em]]" disabled><!--value="[[$musterija->ime]]"-->
      <label>Poruka</label>
      <input name="tekstPoruke" class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="Ovde unesite vašu poruku">
      <div class="w3-section">
        <!--<a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Odustani  <i class="fa fa-remove"></i></a>
        <a class="w3-button w3-red w3-right" onclick="document.getElementById('id01').style.display='none'">Pošalji  <i class="fa fa-paper-plane"></i></a> 
      -->

      <input type="hidden" name="hdnEmail" value="[[$em]]">
      <button type="button" name='btnOdustani' 
                            class="w3-button w3-red"><i class="fa fa fa-remove"></i> Odustani</button>
      <button type="submit" name='btnPosPor' 
                            class="w3-button w3-red w3-right"><i class="fa fa-paper-plane"></i> Pošalji</button>
      </form>
      </div>    
    </div>
  </div>
    </body>
</html>