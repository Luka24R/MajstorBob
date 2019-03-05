<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MajstorBOB | Upravljaj portalom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="tpl/index.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    </head>
    <body style="">

        <div class="w3-container w3-light-gray" id="contact" style=" margin-top: 50px; height:100%">
            <h2>Upravljaj portalom</h2>
            <p>Odavde možete upravljati neželjenim sadržajem sa portala</p>
            <div class="w3-row w3-half">
                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-user-o"></i> Profili koji su prijavljeni</h3>
                </div>
                <div class="w3-row-padding w3-padding-16">
                    <div class="w3-responsive">
                        <table class="w3-table-all">
                            <tr class="w3-black">
                                <th>Spisak profila</th>
                                <th>Razlog</th>
                            </tr>
                            [[foreach $prijavljeniProfili as $key=>$pm]]
                            <tr>
                                [[if $isMajstor[$key]==true]]
                                <td><a href="profil.php?worker=[[$pm->idPrijavljenogProfila]]" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-user-o" style="color:green"></i> Profil ID: [[$pm->idPrijavljenogProfila]]</a></td>
                                [[else]]
                                <td><a href="profil.php?client=[[$pm->idPrijavljenogProfila]]" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-user-o" style="color:green"></i> Profil ID: [[$pm->idPrijavljenogProfila]]</a></td>
                                [[/if]]
                                <td>[[$pm->razlog]]</td>
                                
                            </tr>
                            [[/foreach]]                            
                            
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="w3-row w3-half">
                <div class="w3-container w3-margin-top">
                    <h3><i class="fa fa-newspaper-o"></i> Oglasi koji su prijavljeni</h3>
                </div>
                <div class="w3-row-padding w3-padding-16">
                    <div class="w3-responsive">
                        <table class="w3-table-all">
                            <tr class="w3-black">
                                <th>Spisak profila</th>
                                <th>Razlog</th>
                            </tr>
                            [[foreach $prijavljeniOglasi as $pm]]
                            <tr>

                                <td><a href="actionProfilOglasa.php?hdnId=[[$pm->idPrijavljenogOglasa]]" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-file-o" style="color:green"></i> Oglas ID: [[$pm->idPrijavljenogOglasa]]</a></td>
                                <td>[[$pm->razlog]]</td>
                            </tr>
                            [[/foreach]] 
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>