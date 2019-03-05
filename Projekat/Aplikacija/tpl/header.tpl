<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

        <!-- Navigation Bar -->
        <div class="topnav" id="myTopnav" style="text-decoration: none; position: fixed; top: 0; width: 100%; z-index: 10000;">
            <a href="index.php" class="w3-bar-item w3-button w3-red w3-mobile" style="text-decoration: none;"><i class="fa fa-cogs w3-margin-right"></i>MajstorBob</a>

            [[if $prijavljen]]
            [[if $prijavljenAdmin]]
            <a href="admin.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">Upravljaj portalom</a>
            <a href="inboxAdmina.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">Poruke</a>

            [[else]]
            <a href="mojProfil.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">Moj profil</a>
            <a href="inbox.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">Poruke</a>

            <a href="pomoc.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">Pomoć</a>


            [[/if]]

            [[/if]]

            <a href="kontakt.php" class="w3-bar-item w3-button w3-mobile" style="text-decoration: none;">O nama</a>

            [[if $prijavljenMusterija]]
            <a href="postaviOglas.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile" style="text-decoration: none;">Postavi oglas</a>
            [[/if]]
            [[if !$prijavljen]]
            <a href="#" onclick="document.getElementById('id01').style.display = 'block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile" style="text-decoration: none;">Prijavi se</a>
            <a href="#" onclick="document.getElementById('id03').style.display = 'block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile" style="text-decoration: none;">Registruj se</a>
            [[else]]
            <a href="#" onclick="document.getElementById('id02').style.display = 'block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile" style="text-decoration: none;">Odjavi se</a>
            [[/if]]

            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Modal Prijavi se-->
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">

                <header class="w3-container w3-red"> 
                    <span onclick="document.getElementById('id01').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Uloguj se</h2>
                    <p>Unesite vašu imejl adresu i lozinku da biste se prijavili.</p>
                </header>

                <form action="actionLogovanje.php" method="POST">
                    <div class="w3-container">
                        <br>
                        <label><i class="fa fa-at"></i> Imejl adresa</label>
                        <input class="w3-input w3-border" type="text" name="txtImejl" required>

                        <label><i class="fa fa-lock"></i> Lozinka</label>
                        <input class="w3-input w3-border" type="password" name="txtLozinka" required>
                        <span class="txtImejl"><a href="#" onclick="document.getElementById('id04').style.display = 'block'">Zaboravili ste lozinku?</a></span>


                        <hr>
                        <button type="submit" name="btnPrijaviSe" class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Prijavi se</button>
                        <span name="btnOdustani" onclick="document.getElementById('id01').style.display = 'none'" 
                              class="w3-button w3-half w3-red"><i class="fa fa-remove"></i> Odustani</span>

                              <br>
                        <hr>
                        <p>Nemate nalog na našem portalu?</p>
                        <a href="#" onclick="document.getElementById('id01').style.display = 'none';
                                document.getElementById('id03').style.display = 'block'" class="w3-button w3-block w3-red"><i class="fa fa-user"></i> Registruj se</a>
                        <br>
                        <br>
                    </div>
                </form>

            </div>
        </div>

        <!-- Modal Odjavi se-->
        <div id="id02" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id02').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Odjavi se</h2>
                    <p>Da li ste sigurni da želite da se odjavite?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="actionOdjavljivanje.php" method="POST">

                        <button type="submit" name="btnDaOdjava" class="w3-button w3-half w3-red"><i class="fa fa-remove"></i> Da</button>
                        <span onclick="document.getElementById('id02').style.display = 'none'" 
                              class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Ne</span>
                        <br>
                        <br>
                    </form>
                </div>

            </div>
        </div>

        <!-- Modal Vrsta korisnika-->
        <div id="id03" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id03').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Registruj se</h2>
                    <p>Koji tip korisnika želite da budete?</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="actionRegistrovanje.php" method="post">

                        <button type="submit" name='btn' value='majstor' class="w3-button w3-half w3-grayscale-max"><i class="fa fa-wrench"></i> Majstor</button>
                        <button type="submit" name='btn' value='musterija' class="w3-button w3-half w3-grayscale-min"><i class="fa fa-handshake-o"></i> Mušterija</button>

                    </form>
                    <br>
                    <hr>
                </div>


                <footer class="w3-container w3-black">
                    <span name="btnOdustani" onclick="document.getElementById('id03').style.display = 'none'" 
                          class="w3-button w3-red "><i class="fa fa-remove"></i> Odustani</span>
                </footer>

            </div>
        </div>

        <!-- Modal Zaboravljena lozinka-->
        <div id="id04" class="w3-modal">
            <div class="w3-modal-content">

                <div class="w3-container w3-red">
                    <span onclick="document.getElementById('id04').style.display = 'none'" 
                          class="w3-button w3-display-topright">&times;</span>
                    <h2>Zaboravljena lozinka</h2>
                    <p>Unesite ovde vašu imejl adresu koju ste uneli pri registrovanju.</p>
                    <p>Na ovu imejl adresu će vam biti postala vaša lozinka.</p>
                </div>

                <div class="w3-container">
                    <hr>
                    <form action="actionZaboravljenaLozinka.php" method="post">
                        <label><i class="fa fa-at"></i> Imejl adresa</label>
                        <input class="w3-input w3-border" type="text" name="txtImejl" required>

                        <button type="submit" name='btn' class="w3-button w3-half w3-grayscale-min">Pošalji</button>
                        <button type="reset" name="btnReset" onclick="document.getElementById('id04').style.display = 'none'" class="w3-button w3-half w3-grayscale-min">Odustani</button>
                        <br>
                        <br>
                    </form>
                </div>

            </div>
        </div>


        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    </body>
</html>