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
    <div class="container">
            <h1>Izmena</h1>
            <p>Izmenite zeljene informacije.</p>
            <hr>

            <a href="brisanje.php?musterijaBrisanje=[[$musterija->musterija_Email]]" class="w3-button w3-red w3-block">
                Obriši svoj profil
            </a>
            <hr>
        <form action="izmeniMojProfil.php" method="POST" enctype="multipart/form-data">
        
            <label for="txtIme"><b>Unesite vaše ime</b></label>
            <input name="ime"type="text" value="[[$musterija->ime]]"placeholder="Ime" name="txtIme" required>

            <label for="txtPrezime"><b>Unesite vaše prezime</b></label>
            <input name="prezime" type="text" value="[[$musterija->prezime]]" placeholder="Prezime" name="txtPrezime" required>

            <hr>

            <label for="txtAdresa"><b>Unesite vašu adresu stanovanja</b></label>
            <input name="adresa" type="text" value="[[$musterija->lokacija]]" placeholder="Adresa" name="txtAdresa" required>

            <!--<label for="txtGrad"><b>Unesite grad u kome se nalazite</b></label>
            <input name="lokacija" type="text" placeholder="Grad" name="txtGrad" required>-->

            <label for="txtTelefon"><b>Unesite vaš broj telefona</b></label>
            <input name="kontakt" type="text" value="[[$musterija->kontakt]]" placeholder="Broj telefona" name="txtTelefon" required>

            <hr>

            <label for="txtImejl"><b>Vasa imejl adresu</b></label>
            <input name="musterija_Email" value="[[$musterija->musterija_Email]]" type="text" placeholder="Imejl adresa" name="txtImejl" disabled>

            <label for="txtLozinka"><b>Unesite vašu lozinku</b></label>
            <input name="password"  type="password" value="[[$musterija->password]]" placeholder="Lozinka" name="txtLozinka" required>

            <label for="txtLozinka2"><b>Ponovno unesite vašu lozinku</b></label>
            <input name="password2" type="password" value="[[$musterija->password]]" placeholder="Ponovo unesite vašu lozinku" name="txtLozinka2" required>

            <hr>

            <label for="txtPitanje"><b>Unesite vaše sigurnosno pitanje (ovo pitanje će vam biti postavljeno ukoliko zaboravite svoju lozinku)</b></label>
            <input name="pitanje" type="text" value="[[$musterija->musterija_hint_pitanje]]" placeholder="Sigurnosno pitanje" name="txtPitanje" required>

            <label for="txtOdgovor"><b>Unesite odgovor na sigurnosno pitanje</b></label>
            <input name="odgovor" type="text" value="[[$musterija->musterija_hint_odgovor]]" placeholder="Odgovor na sigurnosno pitanje" name="txtOdgovor" required>

            
            <hr>
              <div class="zaSliku">
                      <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                <input name="fajl_input" type="file" id="fajl_input" accept="image/*" onchange="loadFile(event)">
            
              <img id="output"/>
            </div >  
            <hr>
            
            <div class="clearfix">
                
                <button name='btnSnimiIzmeneMusterija' type="submit" class="btnRegistrovanje">Snimi izmenu</button>
                <button id="btn" type="reset" class="btnOdustani">Odustani</button>
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