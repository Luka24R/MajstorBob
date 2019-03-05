<html>
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
        [[if $p]]
        <h2>Zaboravljena lozinka</h2>
        <hr>
        <label>Unesite odgovor na vaše sigurnosno pitanje</label>
            <p>[[$hintPitanje]]</p>
      
            <form action="actionZaboravljenaLozinka.php" method="POST">
      
      <input name="odgovor" class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="Ovde unesite vaš odgovor">
      <div class="w3-section">
        
    

      <input type="hidden" name="hdnEmail" value="[[$email]]">
      
      <button type="submit" name='vratiSifru' 
                            class="w3-button w3-red w3-middle"><i class="fa fa-paper-plane"></i> Zaboravljena sifra</button>
      </form>
      [[else]]
      <h2>Vasa sifra je:</h2>
            <p>[[$sifra]]</p>
        
            <br>

      [[/if]]
      </div>    
    </div>
  </div>
    </body>
</html>