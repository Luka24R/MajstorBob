<!DOCTYPE html>
<html>
<title>MajstorBOB | Početna strana</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<link rel="stylesheet" href="tpl/style.css">
<link rel="stylesheet" href="tpl/index.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1600px; margin-top: 20px;">
    <img class="w3-image" src="slike/bob1.png" alt="The Hotel" style="min-width:1000px" width="1600" height="800">
    <div class="w3-display-left w3-padding w3-col l6 m8">
        <div class="w3-container w3-red">
            <h2><i class="fa fa-wrench w3-margin-right"></i>Pronađi slobodne majstore</h2>
        </div>
        <div class="w3-container w3-white w3-padding-16">
            <form action="vratiMajstore.php" method="GET">

                <div class="w3-row-padding" style="margin:8px -16px;">
                    
                    <div class="w3-half w3-margin-bottom">
                        <!--<label><i class="fa fa-wrench"></i> Kategorija posla</label>
                        <input class="w3-input w3-border" type="text" placeholder="Građevina, elektronika, stolarija..." name="kategorijaPosla" required>
                        -->
                        <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                        <select name="selKategorija" class="w3-select w3-border">
                            [[foreach $zanati as $zanat]]
                            <option value="[[$zanat->tip]]">[[$zanat->tip]]</option>
                            [[/foreach]]
                        </select>
                    </div>
                    
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa fa-map"></i> Grad</label>
                        <select name="selLokacija" class="w3-select w3-border">
                            [[foreach $lokacije as $lokacija]]
                            <option value="[[$lokacija->mesto]]">[[$lokacija->mesto]]</option>
                            [[/foreach]]
                        </select>
                        
                    </div>
                    
                </div>
                
                <div class="w3-row-padding" style="margin:8px -16px;">
                    
                    
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa fa-question"></i> Potreban izlazak na teren</label>
                        <p><input type="radio" name="izlazakNaTeren" value="DA" required> Da
                            <input style="margin-left: 10px" type="radio" name="izlazakNaTeren" value="NE"> Ne</p>
                    </div>
                    
                    <div class="w3-half w3-margin-bottom">
                        [[if $prijavljen]]
                        <button class="w3-button w3-black w3-right" type="submit" name="sbmPretraziMajstore"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
                        [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-black w3-right"><i class="fa fa-search w3-margin-left"></i> Potraži</a>
                        [[/if]]
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px">

    <div class="w3-row-padding">
        
    <div class="w3-container w3-margin-top">
        <h3>Pronađi majstora prema imenu i prezimenu</h3>
    </div>
        <form action="vratiMajstore.php" method="GET">
        <div class="w3-row w3-threequarter">
            <label><i class="fa fa-address-book"></i> Ime i prezime</label>
            <input class="w3-input w3-border" type="text" placeholder="Na primer Petar Petrović..." name="majstorIme" required="">
        </div>
        <div class="w3-row w3-quarter">
            <label><i class="fa fa-search"></i> Potraži</label>
            [[if $prijavljen]]
            <button class="w3-button w3-block w3-black" name="sbmPotraziPoImenu">Potraži</button>
            [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black">Potraži</a>
                        [[/if]]
        </div>
        </form>
    </div>

    <div class="w3-row w3-third">
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-thumbs-o-up"></i> Najbolje ocenjeni majstor</h3>
    </div>

    <div class="w3-row-padding w3-padding-16">
        <div class="w3-margin-bottom">
            [[if $imaSlika]]
             <img src="[[$slika]]" alt="Majstor" style="width:100%">
            [[else]]
            <img src="slike/luka.jpg" alt="Majstor" style="width:100%">
            [[/if]]
            <div class="w3-container w3-white">
                <!--<h3>[[$najboljeOcenjen->ime]] [[$najboljeOcenjen->prezime]]</h3>-->
                [[if $najboljeOcenjen->online]]
                <h3><span style="color:green"><i class="fa fa-circle"></i></span> [[$najboljeOcenjen->ime]] [[$najboljeOcenjen->prezime]]</h3>
                [[else]]
                <h3><span style="color:red"><i class="fa fa-circle"></i></span> [[$najboljeOcenjen->ime]] [[$najboljeOcenjen->prezime]]</h3>
                [[/if]]
                
                <h6 class="w3-opacity">[[foreach from=$najboljeOcenjen->lokacije item=lok]] [[$lok->mesto]] [[/foreach]]</h6>
                <p>[[foreach from=$najboljeOcenjen->zanati item=zan]] [[$zan->tip]] [[/foreach]]</p>
                
                <div class="w3-container w3-red">
                    <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> [[$ocenjen->ocena]]</label></h2>
                </div>
                [[if $prijavljen]]
                <a href="profil.php?worker=[[$najboljeOcenjen->majstor_Email]]" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user w3-margin-left"></i> Prikaži profil</a>
                [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user w3-margin-left"></i> Prikaži profil</a>
                        [[/if]]
            </form>
            </div>
        </div>

    </div>
</div>
    <div class="w3-row w3-twothird">
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-user-o"></i> Trenutno prijavljeni majstori</h3>
    </div>
    <div class="w3-row-padding w3-padding-16">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr class="w3-black">
                    <th>Ime i prezime</th>
                    <th>Lokacija</th>
                    <th>Kategorija</th>
                    <th>Ocena</th>
                </tr>
                [[foreach $onlineMajstor as $oM]]
                <tr>
                    
                    <td>
                        [[if $prijavljen]]
                        <a href="profil.php?worker=[[$oM->majstor_Email]]" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-circle" style="color:green"></i>  [[$oM->ime]] [[$oM->prezime]]</a>
                        [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-circle" style="color:green"></i>  [[$oM->ime]] [[$oM->prezime]]</a>
                        [[/if]]
                    </td>
                    <td>[[foreach from=$oM->lokacije item=l]] [[$l->mesto]] | [[/foreach]]</td>
                    <td>[[foreach from=$oM->zanati item=z]] [[$z->tip]] [[/foreach]]</td>
                    [[if $oM->ocena==null]]
                    <td>Neocenjen</td>
                    [[else]]
                    <td>[[$oM->ocena]]</td>
                    [[/if]]
                </tr>
                [[/foreach]]
                
            </table>
        </div>
    </div>
    </div>
    
    <div class="w3-container w3-margin-top">
        <h3><i class="fa fa-newspaper-o"></i> Najnoviji oglasi</h3>
    </div>

    <div class="w3-row-padding w3-padding-16 w3-centered">
        [[foreach $oglasi as $id=>$oglas]]
        <form action="actionProfilOglasa.php" method="GET">
            <input type="hidden" name="hdnId" value="[[$id]]">
                <div class="w3-quarter w3-margin-bottom">
                <img src="slike/oglas3.jpg" alt="oglas" style="width:100%">
                <div class="w3-container w3-white">
                <h3>[[$oglas->vrsta_posla]]</h3>
                <h6 class="w3-opacity">[[$oglas->datum]]</h6>
                <p>[[$oglas->mesto]]</p>
                [[if $prijavljen]]
                <button class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-file-o w3-margin-left"></i> Prikaži oglas</button>
                [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-file-o w3-margin-left"></i> Prikaži oglas</a>
                        [[/if]]
                </div>
                </div>
        </form>
        [[/foreach]]
        
    </div>
    <div class="w3-container w3-margin-top">
        <form action="pretrazivanjeOglasa.php" method="post">
            [[if $prijavljen]]
            <button type="submit" name="btnOglasi" class="w3-button w3-block w3-red w3-mobile"><i class="fa fa-align-justify w3-margin-left"></i> Prikaži sve oglase</button>
            [[else]]
                        <a href="#" onclick="document.getElementById('id10').style.display = 'block'" class="w3-button w3-block w3-red w3-mobile"><i class="fa fa-align-justify w3-margin-left"></i> Prikaži sve oglase</a>
                        [[/if]]
        </form>
    </div>
    <!-- End page content -->
</div>

<!-- Modal Prijavi se-->
        <div id="id10" class="w3-modal">
            <div class="w3-modal-content">

                <header class="w3-container w3-red"> 
                    <span onclick="document.getElementById('id10').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Nije moguće pristupanje ovom sadržaju ukoliko niste prijavljeni</h2>
                    
                    <p>Da biste nastavili, Prijavite se ili se registrujte.</p>
                </header>

                    <div class="w3-container">
                        <hr>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'none'; document.getElementById('id01').style.display = 'block'" class="w3-button w3-half w3-grayscale-max" style="text-decoration: none"><i class="fa fa-user w3-margin-left"></i> Prijavi se</a>
                        <a href="#" onclick="document.getElementById('id10').style.display = 'none'; document.getElementById('id03').style.display = 'block'" class="w3-button w3-half w3-grayscale-max" style="text-decoration: none"><i class="fa fa-user w3-margin-left"></i> Registruj se</a>
                        <br>
                        <hr>
                    </div>
                        <footer class="w3-container w3-black">
                        <span name="btnOdustani" onclick="document.getElementById('id10').style.display = 'none'" 
                              class="w3-button w3-red "><i class="fa fa-remove"></i> Odustani</span>
                        </footer>

            </div>
        </div>


</body>
</html>
