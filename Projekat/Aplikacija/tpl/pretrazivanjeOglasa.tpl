<html>
    <head>
        <title>MajstorBOB | Svi oglasi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body class="w3-light-grey" style="margin-top: 50px">


        <div class="w3-container">
            <div class="w3-row w3-quarter" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
                <form action="pretrazivanjeOglasa.php" method="post">
                    <script>
                        function w3_open() {
                            document.getElementById("mySidebar").style.display = "block";
                        }
                        function w3_close() {
                            document.getElementById("mySidebar").style.display = "none";
                        }
                    </script>
                    <div class="w3-bar-item w3-light-gray">
                        <h4><i class="fa fa-pencil"></i> Izmenite kriterijum pretrage</h4>
                    </div>

                    <br>
                    <div class="w3-bar-item">
                        <label><i class="fa fa-gavel"></i> Kategorija oglasa za posao</label>
                        <select name="selZanat" class="w3-select w3-border">

                            [[foreach $zanati as $zanat]]
                            <option value="[[$zanat->tip]]">[[$zanat->tip]]</option>
                            [[/foreach]]
                        </select>
                    </div>
                    <br>
                    <div class="w3-bar-item">
                        <label><i class="fa fa-map"></i> Grad</label>
                        <select name="selGrad" class="w3-select w3-border">

                            [[foreach $lokacije as $lokacija]]
                            <option value="[[$lokacija->mesto]]">[[$lokacija->mesto]]</option>
                            [[/foreach]]
                        </select>
                    </div>
                    <br>
                    <button class="w3-button w3-block w3-red" type="submit" name="sbmPretrazi" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
                </form>

            </div>



            <div class="w3-row w3-threequarter">

                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-thumbs-o-up"></i> Pronađeni oglasi</h3>
                </div>
                [[foreach $oglasi as $id => $oglas]]
                <div class="w3-row-padding w3-padding-16 w3-quarter w3-white">

                    <form action="actionProfilOglasa.php">
                        <div class="w3-margin-bottom">

                            <img src="slike/oglas1.jpg" alt="Oglas" style="width:100%">
                            <div class="w3-container w3-white">
                                <p>Potreban zanatlija: [[$oglas->vrsta_posla]]</p>
                                <label class="pull-right">[[$oglas->datum]]</label>
                                <label class="w3-left-align"> [[$oglas->mesto]]</label>
                                <input type="hidden" name="hdnId" value="[[$id]]">
                                <button type="submit" name="sbmPrikaziOglas" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-newspaper-o"></i> Prikaži oglas</button>

                            </div>
                        </div>
                    </form>




                </div>
                [[/foreach]]

            </div>
        </div>




    </body>
</html>