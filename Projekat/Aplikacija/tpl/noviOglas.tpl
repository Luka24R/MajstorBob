<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Objavi oglas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tpl/oglas.css">
        <script src="tpl/myScript.js"></script>
    </head>
    <body>
        <div class="w3-container" style="height:100%; margin-top: 60px;">
            <div class="w3-row">
                        <h3><i class="fa fa-wrench w3-margin-right "></i>Postavite novi oglas</h3>
                        <p>Za objavljivanje novog oglasa na naš portal, popunite sledeća polja.</p>
                        <hr>
                    <form class="" method="POST" action="postaviOglas.php">

                            <div class="w3-bar-item">
                                <label><i class="fa fa-gavel"></i> Kategorija posla</label>
                                <select name="selKat" class="w3-select w3-border w3-margin-bottom">
                                    [[foreach $zanati as $zanat]]
                                    <option value="[[$zanat->tip]]">[[$zanat->tip]]</option>
                                    [[/foreach]]
                                </select>
                            </div>

                        <hr>
                            <label for="txtGrad"><i class="fa fa-map"></i>  Odaberite grad</label>
                            <select name="selGrad" class="w3-select w3-border w3-margin-bottom">
                                [[foreach $lokacije as $lokacija]]
                                <option value="[[$lokacija->mesto]]">[[$lokacija->mesto]]</option>
                                [[/foreach]]
                            </select>
                            
                            <label for="txtAdresa"><i class="fa fa-home"></i> Unesite adresu</label>
                            <div >
                                <input type="text" class="w3-input w3-border w3-margin-bottom" name="txtAdresa" required=""></textarea>


                            </div>
                            
                            <hr>

                            
                            <label for="txtTekst"><i class="fa fa-align-justify"></i> Unesite tekst oglasa</label>
                                <input type="text" class="w3-input w3-border w3-margin-bottom" style="height: 200px" name="txtTekst" rows="2" required="">

                            <button class="w3-button w3-half w3-green" type="submit" name="sbmKreiraj"><i class="fa fa-check"></i> Objavi</button>
                            <button class="w3-button w3-half w3-red" type="reset" name="reset"><i class="fa fa-close"></i> Poništi unose</button>
                            

                    </form>
            </div>
        </div>
    </body>
</html>
