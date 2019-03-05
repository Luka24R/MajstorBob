<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MajstorBOB | Pomoć</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="tpl/index.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        </style>
    </head>
    <body>

        <div class="w3-container" id="contact" style=" margin-top: 50px;height:100%">
            <h2>Pomoć</h2>
            <p>Postavite pitanje administratoru ukoliko imate bilo koje nedoumice.</p>
            <form action="pomoc.php" method="POST" >
               <!-- <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Vaše ime" required name="Ime"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Vaša imejl adresa" required name="Imejl"></p>-->
                <p><input class="w3-input w3-padding-16 w3-border" type="text" name="PorukaZaAdmina" placeholder="Vaša poruka" required name="Poruka"></p>
                <p><button class="w3-button w3-black w3-padding-large" name="sbmPosaljiAdminu" type="submit">POŠALJI PORUKU</button></p>
            </form>
        </div>


    </body>
</html>