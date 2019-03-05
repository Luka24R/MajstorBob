<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MajstorBob</title>
    <link rel="stylesheet" type="text/css" href="tpl/registrovanjeMajstorStil.css">
    <link rel="stylesheet" href="tpl/index.css">
    <link rel="stylesheet" href="tpl/style.css">
    <link rel="stylesheet" href="tpl/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="margin-top: 50px">
    
    <div>
        <form action="izmeniMojProfil.php" style="border:1px solid #ccc" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h1>Izmena</h1>
            <p>Izmenite željene informacije.</p>
            <hr>

            <a href="brisanje.php?majstorBrisanje=[[$majstor->majstor_Email]]" class="w3-button w3-red w3-block" name="btnObrisiProfilMajstor">
                Obriši svoj profil
            </a>
            <hr>

                <label for="txtIme"><b>Unesite vaše ime</b></label>
                <input type="text" placeholder="Ime" name="txtIme" value="[[$majstor->ime]]" required>

                <label for="txtPrezime"><b>Unesite vaše prezime</b></label>
                <input type="text" placeholder="Prezime" name="txtPrezime" required value="[[$majstor->prezime]]">

                <hr>

                <label for="txtAdresa"><b>Unesite vašu adresu stanovanja</b></label>
                <input type="text" placeholder="Adresa" name="txtAdresa" value="[[$majstor->adresa]]" required>

                <label for="txtGrad"><b>Unesite grad u kome se nalazite</b></label>
                <select multiple="multiple" name="selGrad[]" class="w3-select w3-border" >
                        [[foreach $lokacije as $lokacija]]
                        
                            [[if in_array($lokacija, $majstor->lokacije)]]
                        <option value="[[$lokacija->mesto]]" selected>[[$lokacija->mesto]]</option>
                        [[else]]
                        <option value="[[$lokacija->mesto]]" >[[$lokacija->mesto]]</option>
                        [[/if]]
                       
                        [[/foreach]]
                    </select>

                <label for="txtTelefon"><b>Unesite vaš broj telefona</b></label>
                <input type="text" placeholder="Broj telefona" name="txtTelefon" value="[[$majstor->kontakt]]" required>

                <hr>

                <label for="txtImejl"><b>Unesite vašu imejl adresu</b></label>
                <input type="text" placeholder="Imejl adresa" name="txtImejl" value="[[$majstor->majstor_Email]]" required >

                <label for="txtLozinka"><b>Unesite vašu lozinku</b></label>
                <input type="password" placeholder="Lozinka" name="txtLozinka" required value="[[$majstor->password]]">

                <label for="txtLozinka2"><b>Ponovno unesite vašu lozinku</b></label>
                <input type="password" placeholder="Ponovo unesite vašu lozinku" name="txtLozinka2" value="[[$majstor->password]]" required>

                <hr>

                <label for="txtPitanje"><b>Unesite vaše sigurnosno pitanje (ovo pitanje će vam biti postavljeno ukoliko zaboravite svoju lozinku)</b></label>
                <input type="text" placeholder="Sigurnosno pitanje" name="txtPitanje" required value="[[$majstor->majstor_hint_pitanje]]">

                <label for="txtOdgovor"><b>Unesite odgovor na sigurnosno pitanje</b></label>
                <input type="text" placeholder="Odgovor na sigurnosno pitanje" name="txtOdgovor" value="[[$majstor->majstor_hint_odgovor]]" required>

                <hr>

                <label>
                    [[if $majstor->izlazak_na_teren=="DA"]]
                    <input type="checkbox" name="chkTeren" style="margin-bottom:15px" checked="true" value="1"> Izlazak na teren
                    [[else]]
                    <input type="checkbox" name="chkTeren" style="margin-bottom:15px" value="1"> Izlazak na teren
                    [[/if]]
                </label>

                <hr>

                <!--<label>
                    <input type="checkbox" name="chkGradjevina" style="margin-bottom:15px" value="1"> Građevinski radovi
                </label>
                <label>
                    <input type="checkbox" name="chkElektrika" style="margin-bottom:15px" value="1"> Elektrika
                </label>
                <label>
                    <input type="checkbox" name="chkOdrzavanje" style="margin-bottom:15px" value="1"> Održavanje
                </label>
                <label>
                    <input type="checkbox" name="chkCevi" style="margin-bottom:15px" value="1"> Cevne instalacije
                </label>
                <label>
                    <input type="checkbox" name="chkMaterijali" style="margin-bottom:15px" value="1"> Obrada materijala
                </label>
                <label>
                    <input type="checkbox" name="chkGarderobaNakit" style="margin-bottom:15px" value="1"> Garderoba i nakit
                </label>
                <label>
                    <input type="checkbox" name="chkVozila" style="margin-bottom:15px" value="1"> Održavanje vozila
                </label>
                <label>
                    <input type="checkbox" name="chkOstalo" style="margin-bottom:15px" value="1"> Ostalo
                </label>-->
                 [[foreach $zanati as $zanat]]
                 <label>
                     [[if in_array($zanat, $majstor->zanati)]]
                     <input type="checkbox" name="chkZanat[]" style="margin-bottom:15px" value='[[$zanat->tip]]' checked='true'> [[$zanat->tip]]
                     [[else]]
                      <input type="checkbox" name="chkZanat[]" style="margin-bottom:15px" value='[[$zanat->tip]]' > [[$zanat->tip]]
                     [[/if]]
                </label>
                [[/foreach]]
                <hr>
                <label for="txtKvalifikacije"><b>Unesite kvalifikacije koje posedujete</b></label>
                <input type="text" placeholder="Vaše kvalifikacije" name="txtKvalifikacije" value="[[$majstor->kvalifikacije]]"required>
                <hr>
                <div class="zaSliku">
                      <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                <input name="fajl_input" type="file" id="fajl_input" accept="image/*" onchange="loadFile(event)">
            
              <img id="output"/>
            </div > 
            <hr>
				<label><b>Radno vreme</b></label>

				<br><br>
                <div class="radnoVreme" style="width: 30%; float: left">
                    [[if $majstor->vreme_radni_dan!=""]]
                    <label for="working_days"><input type="checkbox" class="checkbox" name="working_days" id="working_days" value="1" checked="checked" /> Radni dani </label>
                    [[else]]
                    <label for="working_days"><input type="checkbox" class="checkbox" name="working_days" id="working_days" value="1"  /> Radni dani </label>
                    [[/if]]
                
                <br>Od:
                <select name="working_start_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00' selected='selected' >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00'  >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00'  >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00'  >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option>
                </select>
                <br>Do:
                <select name="working_end_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00'  >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00'  >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00'  >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00' selected='selected' >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option><option value='24:00'>24:00</option>
                </select>
                </div>
                  
                <div class="radnoVreme" style="width: 30%; float: left">
                     [[if $majstor->vreme_subota!=""]]
                     <label  for="saturday"><input type="checkbox" class="checkbox" name="saturday" id="saturday" value="6" checked="checked" />Subota</label>
                [[else]]
                <label  for="saturday"><input type="checkbox" class="checkbox" name="saturday" id="saturday" value="6" />Subota</label>
                [[/if]]
                <br>Od:
                <select name="saturday_start_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00' selected='selected' >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00'  >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00'  >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00'  >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option>
                </select>
                <br>Do:
                <select name="saturday_end_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00'  >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00'  >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00' selected='selected' >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00'  >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option><option value='24:00' >24:00</option>
                </select>
                </div>


                <div class="radnoVreme" style="width: 30%; float: left">
                    [[if $majstor->vreme_nedelja!=""]]
                    <label  for="sunday"><input type="checkbox" class="checkbox" name="sunday" id="sunday" value="7" checked="true" /></label>Nedelja
                    [[else]]
                    <label  for="sunday"><input type="checkbox" class="checkbox" name="sunday" id="sunday" value="7" /></label>Nedelja
                    [[/if]]
                <br>Od:
                <select name="sunday_start_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00' selected='selected' >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00'  >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00'  >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00'  >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option>
                </select>
                <br>Do:
                <select name="sunday_end_time" class="ui-widget-content ui-corner-all">
                    <option value='00:00'  >00:00</option><option value='00:30' >00:30</option><option value='01:00'  >01:00</option><option value='01:30' >01:30</option><option value='02:00'  >02:00</option><option value='02:30' >02:30</option><option value='03:00'  >03:00</option><option value='03:30' >03:30</option><option value='04:00'  >04:00</option><option value='04:30' >04:30</option><option value='05:00'  >05:00</option><option value='05:30' >05:30</option><option value='06:00'  >06:00</option><option value='06:30' >06:30</option><option value='07:00'  >07:00</option><option value='07:30' >07:30</option><option value='08:00'  >08:00</option><option value='08:30' >08:30</option><option value='09:00'  >09:00</option><option value='09:30' >09:30</option><option value='10:00'  >10:00</option><option value='10:30' >10:30</option><option value='11:00'  >11:00</option><option value='11:30' >11:30</option><option value='12:00' selected='selected' >12:00</option><option value='12:30' >12:30</option><option value='13:00'  >13:00</option><option value='13:30' >13:30</option><option value='14:00'  >14:00</option><option value='14:30' >14:30</option><option value='15:00'  >15:00</option><option value='15:30' >15:30</option><option value='16:00'  >16:00</option><option value='16:30' >16:30</option><option value='17:00'  >17:00</option><option value='17:30' >17:30</option><option value='18:00'  >18:00</option><option value='18:30' >18:30</option><option value='19:00'  >19:00</option><option value='19:30' >19:30</option><option value='20:00'  >20:00</option><option value='20:30' >20:30</option><option value='21:00'  >21:00</option><option value='21:30' >21:30</option><option value='22:00'  >22:00</option><option value='22:30' >22:30</option><option value='23:00'  >23:00</option><option value='23:30' >23:30</option><option value='24:00' >24:00</option>
                </select>
                </div>
            
                    <div class="clearfix">
                    <button type="button" class="btnOdustani" name="btnOdustani">Odustani</button>
                    <button type="submit" class="btnRegistrovanje" name="btnSnimiIzmeneMajstor">Izmeni</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>