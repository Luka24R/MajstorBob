<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="tpl/kalendarStil.css">
        <link rel="stylesheet" href="tpl/StarRating.css">
        <link rel="stylesheet" type="text/css" href="tpl/profilMajstora.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="tpl/profilM.css" rel="stylesheet">
    <body class="w3-light-grey">
        <div class="container" style="margin-top: 60px;height: 100%">
            <div class="row">

                <div class="col w3-third">
                    <div class="w3-card w3-round w3-white">
                        <div id="accordion" class="accordion w3-card w3-round w3-white">

                            <div class="col col_4 iamgurdeep-pic">
                                [[if $imaSlika]]
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="[[$slika]]">
                                [[else]]
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="slike/profAvatar.png">
                                [[/if]]
                                [[if $prijavljenAdmin]]
                                <a href="brisanje.php?musterijaBrisanje=[[$imejl]]" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> OBRIŠI OVAJ PROFIL</a>
                                [[/if]]
                                [[if !$ja && !$prijavljenAdmin]]
                                <button onclick="document.getElementById('id20').style.display = 'block'" class="w3-button w3-red" style="position: absolute; top: 10px; left: 10px;"><i class="fa fa-exclamation-triangle"></i> PRIJAVI OVAJ PROFIL</button>

                                [[/if]]
                                <div class="username">
                                    <h2 style="color: red"><!--Petar Petrović -->[[$musterija->ime]] [[$musterija->prezime]]
                                        <!--<small><i class="fa fa-map-marker"></i> Beograd </small>
                                        --></h2>
                                    [[if $prijavljenMusterija]]
                                    [[if $ja]]
                                    <a name='btnIzmeniMusterija' href="izmeniMojProfil.php?btnIzmeniMusterija=[[$musterija->musterija_Email]]" class="btn-o"> <i class="fa fa-edit"></i> Izmeni svoj profil </a>
                                    [[/if]]
                                    [[else]]

                                    <a name='btnPosPorukuMusterija' href="novaPoruka.php?btnPosPorukuMusterija=[[$musterija->musterija_Email]]" class="btn-o"> <i class="fa fa-envelope"></i> Pošalji poruku </a>
                                    [[/if]]
                                </div>

                            </div>
                            [[if $ja]]
                            <form action="mojiOglasi.php" method="POST">
                                <input type="hidden" name="hdnEmail" value="[[$musterija->musterija_Email]]">

                                <button name='btnMojiOglasi' 
                                        class="accordion w3-red"><i class="fa fa-newspaper-o"></i> Moji oglasi</button>
                            </form>
                            [[else]]
                            <button name='btnMojiOglasi' onclick="window.location = '#'"
                                    class="accordion w3-white"><i class=""></i></button>
                            [[/if]]


                        </div>


                    </div>
                </div>

                <div class="w3-row-padding w3-twothird">


                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h2 style="text-align: center;"><i class="fa fa-info"></i> Informacije</h2>
                            <hr>
                            <br>

                            <p style="color: red"><strong><i class="fa fa-phone"></i> Kontakt telefon</strong></p><p class="title"><!--060/12-34-567-->[[$musterija->kontakt]]</p>
                            <p style="color: red"><strong><i class="fa fa-home"></i> Adresa stanovanja</strong></p><p class="title"><!--Kralja Milutina 10-->[[$musterija->lokacija]]</p>
                            <p style="color: red"><strong><i class="fa fa-at"></i> Imejl adresa</strong></p><p class="title"><!--petar.petrovic@email.com-->[[$musterija->musterija_Email]]</p>
                            <br>
                            <hr>
                            <br>
                            <!--<button class="w3-button w3-red"><i class="fa fa-edit"></i> Izmeni svoj profil</button>-->

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
                    <h2>Prijavi oglas?</h2>
                    <p>Da li ste sigurni da želite da se prijavite ovaj oglas kao nepoželjni sadržaj?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="prijaviProfil.php" method="post">
                        <input type="hidden" name="klijentId" value="[[$imejl]]">
                        <p>Zbog čega želite da prijavite ovaj profil kao nepoželjni sadržaj?</p>
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