<!DOCTYPE html>
<html>
    <title>MajstorBOB | Oglas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
    <body class="w3-light-grey">

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px">

            <!-- The Grid -->
            <div class="w3-row-padding" style="margin-top: 60px; height: 100%">

                <!-- Left Column -->
                <div class="w3-quarter">

                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="slike/oglas1.jpg" style="width:100%" alt="Avatar">
                            [[if $prijavljenAdmin]]
                            <a href="obrisiOglas.php?id=[[$id]]" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ OGLAS</a>
                            [[/if]]
                            [[if !$ja && !$prijavljenAdmin]]
                            <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ OGLAS</button>

                            [[/if]]
                        </div>


                        <div class="w3-container">
                            <br>


                            <p><strong><i class="fa fa-wrench fa-fw w3-margin-right w3-large w3-text-red"></i> Kategorija </strong></p><p class="title">[[$oglas->vrsta_posla]]</p>
                            <p><strong><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-red"></i> Adresa</strong></p><p class="title">
                                [[$oglas->adresa]]</p>
                            <p><strong><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-red"></i> Mesto</strong></p><p class="title">[[$oglas->mesto]]</p>


                            <!-- <form action="actionBrisanjeOglasa.php" method="post">
                             <button class="w3-button w3-red w3-block" type="submit" name="submit">OBRIŠI OVAJ OGLAS</button> <!-- OVO JE MUSTERIJA SAMA SEBI DA BRISE OGLAS -->
                            <!-- </form>-->
                        </div>

                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-half">

                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-newspaper-o fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Posao</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Opis posla</b></h5>
                            <p>
                                [[$oglas->tekst_oglasa]]
                            </p>
                            <h6 class="w3-text-red"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                [[$oglas->datum]]</h6>


                            <hr>
                        </div>
                        <div class="w3-container">
                            [[if $ja]]
                            <a href="obrisiOglas.php?id=[[$id]]" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Obriši oglas</a>
                            <hr>
                            <div>
                                <h4 class="w3-opacity">Prijavljeni majstori</h4>
                                [[foreach $prijavljeni as $majstor]]
                                <div class="w3-row">
                                    [[$majstor->ime]] [[$majstor->prezime]] 
                                    <a href="profil.php?worker=[[$majstor->majstor_Email]]" class="w3-button  w3-red w3-mobile pull-right" style="text-decoration: none"> Prikaži profil</a>
                                    [[if !$oglas->majstor_koji_radi_email]]

                                    <a href="angazuj.php?id=[[$id]]&worker=[[$majstor->majstor_Email]]" class="w3-button  w3-red w3-mobile pull-right" style="text-decoration: none"> Angažuj</a>
                                    [[else]]
                                    [[if $oglas->majstor_koji_radi_email==$majstor->majstor_Email]]
                                    <i class="w3-mobile pull-right">Angažovan</i>
                                    [[/if]]
                                    [[/if]]


                                </div>
                                <hr>
                                [[/foreach]]
                            </div>
                            [[else]]
                            [[if $oglas->majstor_koji_radi_email]]

                            <h2>Majstor za ovaj posao je pronađen</h2>
                            [[if $oglas->majstor_koji_radi_email==$majstorKojiGleda]]
                            <i class="w3-mobile ">Angažovani ste</i>
                            <hr>
                            [[/if]]
                            [[else]]
                            [[if $majstor]]
                            [[if in_array($majstorKojiGleda, $oglas->prijavljeniMajstori) && !$oglas->majstor_koji_radi_email==$majstorKojiGleda]]
                            <i class="w3-mobile ">Prijavljeni ste za ovaj posao</i>
                            <a href="prijavaZaPosao.php?otkaziPrijavu=[[$id]]" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Otkaži prijavu</a>
                            <hr>
                            [[else]]
                            [[if !$prijavljenAdmin]]
                            <a href="prijavaZaPosao.php?id=[[$id]]" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Prijavi se za obavljanje posla</a>
                            [[/if]]
                            [[/if]]
                            [[/if]]
                            [[/if]]
                            [[/if]]
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>
                [[if !$ja]]
                <div class="w3-container w3-quarter w3-card w3-white">

                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-red"></i> Oglasivač</h2>
                    <div class="w3-display-container">
                        [[if $imaSlika]]
                        <img src="[[$slika]]" style="width:100%" alt="Avatar">
                        [[else]]
                        <img src="slike/luka.jpg" style="width:100%" alt="Avatar">
                        [[/if]]
                        <h2 class="w3-text-grey w3-padding-16">  [[$musterija->ime]] [[$musterija->prezime]]</h2>
                        <a href="profil.php?client=[[$musterija->musterija_Email]]" class="w3-button w3-block w3-red w3-mobile" style="text-decoration: none"> Prikaži profil</a> 
                        <br>

                    </div>

                </div>

                [[/if]]
                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <!-- Modal Da li ste sigurni-->
        <div id="id20" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id20').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Prijavi oglas?</h2>
                    <p>Da li ste sigurni da želite da se prijavite ovaj oglas kao nepoželjni sadržaj?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="prijaviOglas.php" method="post">
                        <input type="hidden" name="hdnId" value="[[$id]]">
                        <p>Zbog čega želite da prijavite ovaj oglas kao nepoželjni sadržaj?</p>
                        <input type="text" name="razlog" class="w3-input w3-card w3-light-grey">
                        <br>
                        <button onclick="document.getElementById('id20').style.display = 'none';
                                document.getElementById('id30').style.display = 'block'" type="submit" name="submit" class="w3-button w3-red w3-half"><i class="fa fa-exclamation-triangle"></i> Da</button>
                        <span onclick="document.getElementById('id20').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>   
                        <br>
                        <hr>
                    </form>

                </div>

            </div>
        </div>

        <!-- Modal Uspešna prijava-->
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

    </body>
</html>
