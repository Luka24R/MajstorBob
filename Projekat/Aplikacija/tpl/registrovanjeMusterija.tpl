<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MajstorBob</title>
    <link rel="stylesheet" type="text/css" href="tpl/registrovanjeMusterijaStil.css">
    <link rel="stylesheet" href="tpl/index.css">

</head>
<body style="margin-top: 50px">
    
<div>
    <form action="registrovanjeMusterija.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1>Registruj se kao mušterija</h1>
            <p>Popunite sledeća polja da biste se registrovali kao mušterija.</p>
            <hr>

            <label for="txtIme"><b>Unesite vaše ime</b></label>
            <input name="ime"type="text" placeholder="Ime" name="txtIme" required>

            <label for="txtPrezime"><b>Unesite vaše prezime</b></label>
            <input name="prezime" type="text" placeholder="Prezime" name="txtPrezime" required>

            <hr>

            <label for="txtAdresa"><b>Unesite vašu adresu stanovanja</b></label>
            <input name="adresa" type="text" placeholder="Adresa" name="txtAdresa" required>

            <label for="txtGrad"><b>Unesite grad u kome se nalazite</b></label>
            <input name="lokacija" type="text" placeholder="Grad" name="txtGrad" required>

            <label for="txtTelefon"><b>Unesite vaš broj telefona</b></label>
            <input name="kontakt" type="text" placeholder="Broj telefona" name="txtTelefon" required>

            <hr>

            <label for="txtImejl"><b>Unesite vašu imejl adresu</b></label>
            <input name="musterija_Email" type="text" placeholder="Imejl adresa" name="txtImejl" required>

            <label for="txtLozinka"><b>Unesite vašu lozinku</b></label>
            <input name="password" type="password" placeholder="Lozinka" name="txtLozinka" required>

            <label for="txtLozinka2"><b>Ponovno unesite vašu lozinku</b></label>
            <input name="password2" type="password" placeholder="Ponovo unesite vašu lozinku" name="txtLozinka2" required>

            <hr>

            <label for="txtPitanje"><b>Unesite vaše sigurnosno pitanje (ovo pitanje će vam biti postavljeno ukoliko zaboravite svoju lozinku)</b></label>
            <input name="pitanje" type="text" placeholder="Sigurnosno pitanje" name="txtPitanje" required>

            <label for="txtOdgovor"><b>Unesite odgovor na sigurnosno pitanje</b></label>
            <input name="odgovor" type="text" placeholder="Odgovor na sigurnosno pitanje" name="txtOdgovor" required>

            
            <hr>
              <div class="zaSliku">
                      <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                <input name="fajl_input" type="file" id="fajl_input" accept="image/*" onchange="loadFile(event)">
            
              <img id="output"/>
            </div >  
            <hr>
            
            <div class="clearfix">
                
                <button name='btnRegistrovanje' type="submit" class="btnRegistrovanje w3-green"><i class="fa fa-check"></i> Registrovanje</button>
                <button id="btn" type="reset" class="btnOdustani w3-red"><i class="fa fa-close"></i> Odustani</button>
                
                <script type="text/javascript">
                document.getElementById("btn").onclick = function () {
                    location.href = "index.php";
                };
            </script>
                <!--<a href="index.php"><input type="button" class="btnOdustani" value="Odustani" /></a>-->
                <!-- <a href="index.php"><input type="button" class="btnOdustani" value="Submit" /></a> <input type="button" value="Cancel" class="btnOdustani onclick="javascript: location.href='index.php';"/>-->
            </div>
            
        </div>
    </form>
</div>
</body>
</html>