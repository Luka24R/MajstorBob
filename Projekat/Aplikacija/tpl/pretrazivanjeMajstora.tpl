<html>
    <head>
        <title>MajstorBOB | Majstori</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body class="w3-main w3-light-grey" style="margin-top: 50px;">

        <div class="w3-container">
        <div class="w3-row w3-quarter w3-light-gray" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
            <form action="vratiMajstore.php" method="GET">
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
                    <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                    <select name="selKat" class="w3-select w3-border">
                        [[foreach $zanati as $zanat]]
                        <option value="[[$zanat->tip]]">[[$zanat->tip]]</option>
                        [[/foreach]]
                    </select>
                </div>
<br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-map"></i> Grad</label>
                    <select name="selLok" class="w3-select w3-border">
                        [[foreach $lokacije as $lokacija]]
                        <option value="[[$lokacija->mesto]]">[[$lokacija->mesto]]</option>
                        [[/foreach]]
                    </select>
                </div>
<br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-question"></i> Potreban izlazak na teren</label>
                    <p><input type="radio" name="radIzlazakNaTeren" value="DA" checked> Da
                        <input style="margin-left: 10px" type="radio" name="radIzlazakNaTeren" value="NE"> Ne</p>
                </div>
<br>
                <button class="w3-button w3-block w3-red" type="submit" name="sbmMajstor" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
            </form>
            <br>
            <div class="w3-bar-item w3-light-gray w3-center">
                    <h4></h4>
                </div>
            <br>
            <form action="vratiMajstore.php" method="GET">
                <div class="w3-bar-item w3-light-gray">
                    <h4><i class="fa fa-search"></i> Pretražite po imenu i prezimenu</h4>
                </div>
                <br>
                <div class="w3-bar-item">
                    <label><i class="fa fa-clock-o"></i> Ime i prezime</label>
                    <input class="w3-input w3-border" type="text" name="majstorIme" required>
                </div>
                <br>
                <button class="w3-button w3-block w3-red" type="submit" name="sbmImePrezime" value="Prikaži"><i class="fa fa-search w3-margin-left"></i> Potraži</button>
            </form>

        </div>



        <div class="w3-row w3-threequarter">

            <div class="w3-container w3-margin-top">
                <h3><i class="fa fa-thumbs-o-up"></i> Pronađeni majstori</h3>
            </div>
            [[foreach $majstori as $majstor]] 
            <div class="w3-row w3-quarter">

                <div class="w3-margin-bottom w3-white w3-center">

                    [[if $majstor->slika!=null]]
                    <img src="[[$majstor->slika]]" alt="Majstor" style="width:200px; height: 200px;">
                    [[else]]
                    <img src="slike/luka.jpg" alt="Majstor" style="width:200px; height: 200px;">
                    [[/if]]
                    <div class="w3-container w3-white">

                        [[if $majstor->online]]
                        <h3><span style="color:green"><i class="fa fa-circle"></i></span>  [[$majstor->ime]] [[$majstor->prezime]]</h3>
                        [[else]]
                        <h3><span style="color:red"><i class="fa fa-circle"></i></span> [[$majstor->ime]] [[$majstor->prezime]]</h3>
                        [[/if]]
                        <h6 class="w3-opacity">[[foreach from=$majstor->lokacije item=lok]] [[$lok->mesto]] [[/foreach]]</h6>
                        <p>[[foreach from=$majstor->zanati item=zan]] [[$zan->tip]] [[/foreach]]</p>

                        <div class="w3-container w3-red">
                            <!--<h2><i class="fa fa-star"></i> Ocena<label style="float:right"> [[$majstor->ocena]]</label></h2>-->
                             [[if $majstor->ocena==null]]
                            <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> X</label></h2>
                            [[else]]
                            <h2><i class="fa fa-star"></i> Ocena<label style="float:right"> [[$majstor->ocena]]</label></h2>
                            [[/if]]
                        </div>
                        <a href="profil.php?worker=[[$majstor->majstor_Email]]" class="w3-button w3-block w3-black w3-margin-bottom"><i class="fa fa-user-o"></i> Prikaži profil</a>

                    </div>

                </div>


            </div>
            [[/foreach]]
        </div>
        </div>




    </body>
</html>