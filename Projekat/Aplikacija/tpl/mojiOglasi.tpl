<html>
    <head>
        <title>MajstorBOB </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="tpl/style.css">
        <link rel="stylesheet" href="tpl/index.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="w3-light-grey" style="margin-top: 50px;height:100%">

        <div class="w3-container w3-margin-top">
            
            [[if $prijavljenMusterija]]
            <h3><i class="fa fa-newspaper-o"></i> Vaši oglasi</h3>
            [[else]]
            [[if $prijavljenMajstor]]
            <h3><i class="fa fa-newspaper-o"></i> Vaše prijave za posao</h3>
            [[/if]]
            [[/if]]
        </div>

        <div class="w3-row-padding w3-padding-16">
            [[foreach $oglasi as $id => $oglas]]
            <div class="w3-quarter w3-margin-bottom">
                <img src="slike/oglas3.jpg" alt="oglas" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>[[$oglas->vrsta_posla]]</h3>
                    <h6 class="w3-opacity">[[$oglas->datum]]</h6>
                    <p>[[$oglas->mesto]]</p>
                    <form action="actionProfilOglasa.php">
                    <input type="hidden" name="hdnId" value="[[$id]]">
                    <button class="w3-button w3-block w3-black w3-margin-bottom">Prikaži oglas</button>
                    </form>
                </div>
            </div>
            [[/foreach]]
        </div>

    </body>
</html>