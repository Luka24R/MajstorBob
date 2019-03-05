<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <link rel="stylesheet" href="tpl/kalendarStil.css">
        <link rel="stylesheet" href="tpl/StarRating.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="tpl/profilM.css" rel="stylesheet">
    <body class="w3-light-grey" >
        <div class="container" style="margin-top: 60px; height: 100%">
            <div class="row">

                <div class="col w3-quarter">
                    <div class="w3-card w3-round w3-white">
                        <div id="accordion" class="accordion w3-card w3-round w3-white">

                            <div class="col col_4 iamgurdeep-pic">
                                [[if $imaSlika]]
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="[[$slika]]">
                                [[else]]
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="slike/profAvatar.png">
                                [[/if]]

                                [[if $prijavljenAdmin]]		
                                <a href="brisanje.php?majstorBrisanje=[[$imejl]]" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ PROFIL</a>		
                                [[/if]]
                                [[if !$ja && !$prijavljenAdmin]]
                                <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ PROFIL</button>

                                [[/if]]
                                <div class="username">
                                    <h2 style="color: red">[[$majstor->ime]] [[$majstor->prezime]] 

                                        [[foreach $majstor->lokacije as $l ]]
                                        <small><i class="fa fa-map-marker"></i> [[$l->mesto]] </small></h2>
                                    [[/foreach]]
                                    [[foreach $majstor->zanati as $z]]
                                    <p><i class="fa fa-briefcase"></i> [[$z->tip]]  </p>
                                    [[/foreach]]
                                    [[if $ja]]

                                    <a name='btnIzmeniMajstor' href="izmeniMojProfil.php?btnIzmeniMajstor=[[$majstor->majstor_Email]]" class="btn-o"> <i class="fa fa-edit"></i> Izmeni svoj profil </a>
                                    [[else]]
                                    [[if !$drugiMajstor]]
                                    <a name='btnPosPorukuMajsotor' href="novaPoruka.php?btnPosPorukuMajsotor=[[$majstor->majstor_Email]]" class="btn-o"> <i class="fa fa-envelope"></i> Pošalji poruku </a>
                                    [[/if]]
                                    [[/if]]
                                    <h4 class="pull-right"><i class="fa fa-star"></i> [[$majstor->ocena]]</h4>

                                </div>

                                


                            </div>
                            
                            [[if $ja]]
                                <button class="accordion w3-red" onclick="location.href = 'mojiOglasi.php?prijava=[[$majstor->majstor_Email]]';" style="margin-bottom: 20px"><i class="fa fa-info-circle"></i>Prijave za posao</button>
                                [[/if]] 
                            <button class="accordion w3-red" style="margin-top: 5px;"><i class="fa fa-info-circle"></i> O majstoru</button>
                            <div class="panel">
                                <p>Email:[[$majstor->majstor_Email]]</p>
                                <p>Adresa:[[$majstor->adresa]]</p>
                                <p>Kontakt:[[$majstor->kontakt]]</p>
                                <p>Kvalifikacije:[[$majstor->kvalifikacije]]</p>
                            </div>

                            <button class="accordion w3-red"><i class="fa fa-clock-o"></i> Satnica</button>
                            <div class="panel">
                                <p>Radni dan:[[$majstor->vreme_radni_dan]]h</p>
                                <p>Subota:[[$majstor->vreme_subota]]h</p>
                                <p>Nedelja:[[$majstor->vreme_nedelja]]h</p>
                            </div>

                            
                            <script>
                                var acc = document.getElementsByClassName("accordion");
                                var i;

                                for (i = 0; i < acc.length; i++) {
                                    acc[i].addEventListener("click", function () {
                                        this.classList.toggle("active");
                                        var panel = this.nextElementSibling;
                                        if (panel.style.maxHeight) {
                                            panel.style.maxHeight = null;
                                        } else {
                                            panel.style.maxHeight = panel.scrollHeight + "px";
                                        }
                                    });
                                }
                            </script>


                        </div>


                    </div>
                </div>

                <div class="w3-row-padding w3-half">
                    [[if !$ja && $prijavljenAdmin==false ]]
                    [[if !$ocenio && !$drugiMajstor]]

                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <form action="profil.php?worker=[[$majstor->majstor_Email]]" method="POST">
                                <div class="w3-margin-top">
                                    <h3><i class="fa fa-thumbs-o-up"></i> Ocenite ovog majstora</h3>
                                </div>

                                <x-star-rating name="ocena" id="ocenaRate" value="0" number="10"></x-star-rating>
                                <input type="hidden" id="ocenaStar" name="ocenaStar" value="nema">
                                <script src="tpl/StarRating.js"></script>
                                <script>
                                ocenaRate.addEventListener('rate', () => {
                                    var el = document.getElementById("ocenaStar");
                                    el.value = ocenaRate.value;
                                });
                                </script>


                                <div>
                                    <label style="color: green"><i class="fa fa-plus"></i> Pozitivne strane</label>
                                    <input class="w3-input w3-border" type="text" name="txtKomPoz" placeholder="Vaš komentar o majstoru" required>
                                </div>

                                <br>

                                <div>
                                    <label style="color: red"><i class="fa fa-minus"></i> Negativne strane</label>
                                    <input class="w3-input w3-border" type="text" name="txtKomNeg" placeholder="Vaš komentar o majstoru" required>
                                </div>
                                <input type="hidden" name="hdnMejl" value="[[$majstor->majstor_Email]]"
                                       <br><br>
                                <button type="submit" name="btnObjavi" class="w3-button w3-red"><i class="fa fa-pencil"></i>  Objavi</button> 
                            </form>
                        </div>
                    </div>
                    [[else]]
                    [[if $drugiMajstor]]
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2><i class="fa fa-thumbs-o-up"></i> Nemate mogućnost da dajete ocene drugim majstorima </h2>
                        </div>
                    </div>

                    [[else]]
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2><i class="fa fa-thumbs-o-up"></i> Već ste ocenili ovog majstora!</h2>
                        </div>
                    </div>

                    [[/if]]
                    [[/if]]
                    [[/if]]
                </div>


                <div class="w3-row-padding w3-half">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <div class="w3-margin-top">
                                <h3><i class="fa fa-commenting-o"></i> Komentari koje su ostavili drugi korisnici</h3>
                            </div>
                            [[foreach $majstor->komentari as $kom]]
                            <div class="w3-container w3-margin-top">
                                <h3>[[$kom->posiljaoc]]</h3>
                                <h6 style="color: green"><i class="fa fa-plus"></i>   [[$kom->komentar_tekst_pozitivan]] </h6>
                                <h6 style="color: red"><i class="fa fa-minus"></i>  [[$kom->komentar_tekst_negativan]]</h6>
                            </div>
                            [[/foreach]]


                        </div>
                    </div>
                </div>
                
                <div class="w3-row-padding w3-quarter">
                    <div class="w3-card w3-round w3-white">
                        <label class="w3-button w3-block w3-red"><i class="fa fa-calendar-o"></i> Planer</label>
                            <div class="w3-panel">
                                [[if $ja]]
                              
                                 <a href="#" onclick="document.getElementById('id40').style.display = 'block'" style="text-decoration: none" class="w3-button w3-block w3-light-grey"><i class="fa fa-calendar-check-o"></i> Dodaj događaj</a>
                                
                                 <hr>
                                 
                                
                                       [[/if]]
                                       [[foreach $datumi as $datum]]
                                       <div>
                                         
                                          <p> <label class="w3-light-grey">[[$datum ]]<label></p>
                                                      [[foreach $db->vratiDogadjaje($datum, $majstor->majstor_Email) as $id=> $dogadjaj]]
                                                        <form action="planer.php" method="POST">
                                                        <p><label class="fa fa-clock-o"> [[$dogadjaj->vreme]] </label>
                                                            [[$dogadjaj->opisDogadjaja]]
                                                            [[if $ja]]
                                                           
                                                            <input type="submit" class="w3-small w3-button w3-red pull-right" name="sbmObrisiDogadjaj" value="Obriši">
                                                            <input type="hidden" name="hdnDogadjaja" value="[[$id]]">
                                                            [[/if]]
                                                        </p>
                                                        </form>
                                                       
                                                      <hr>
                                                      [[/foreach]]
                                                      
                                       </div>
                                       [[/foreach]]
                                       
                            </div>
                    </div>
                </div>


            </div>


        </div>	

        <!-- Modal Da li ste sigurni-->
        <div id="id20" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id20').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Prijavi profil?</h2>
                    <p>Da li ste sigurni da želite da se prijavite ovaj profil kao nepoželjni sadržaj?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="prijaviProfil.php" method="post">
                        <input type="hidden" name="klijentId" value="[[$imejl]]">
                        <p>Zbog čega želite da prijavite ovaj profil kao nepoželjni sadržaj?</p>
                        <input type="text" name="razlog" class="w3-input w3-card w3-light-grey">
                        <br>
                        <button onclick="document.getElementById('id20').style.display = 'none'; document.getElementById('id30').style.display = 'block'" type="submit" name="submit" class="w3-button w3-red w3-half"><i class="fa fa-exclamation-triangle"></i> Da</button>
                        <span onclick="document.getElementById('id20').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>   
                        <br>
                        <hr>
                    </form>

                </div>

            </div>
        </div>

        <!-- Modal Novi dogadjaj-->
        <div id="id30" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-green">
                    <span onclick="document.getElementById('id20').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Nepoželjni sadržaj je uspešno prijavljen</h2>
                    <br>
                </div>

            </div>
        </div>

        <!-- Modal Vrsta korisnika-->
        <div id="id40" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id40').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Dodavanje novog događaja</h2>
                    
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="planer.php" method="post">
                                <label>Dodajte događaj u planer</label>
                                
                                <p>Izaberite datum</p>
                                <input type="date" name="datum" class="w3-input w3-block w3-border">
                                <p>Unesite naziv događaja</p>
                                <input type="text" name="naziv" class="w3-input w3-block w3-border">
                                <p>Unesite vreme</p>
                                <input type="text" name="vreme" class="w3-input w3-block w3-border">
                                <hr>
                                 <p><input type="submit" name="sbmDodajUPlaner" value="Dodaj" class="w3-button w3-green w3-block"></p>
                                 
                                </form>
                    <hr>
                </div>


                <footer class="w3-container w3-black">
                    <span name="btnOdustani" onclick="document.getElementById('id40').style.display = 'none'" 
                          class="w3-button w3-red "><i class="fa fa-remove"></i> Odustani</span>
                </footer>

            </div>
        </div>
        
    </body>
</html>