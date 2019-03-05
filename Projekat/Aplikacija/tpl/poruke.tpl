<!DOCTYPE html>
<html>
    <title>MajstorBOB | Poruke</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="tpl/style.css">
    <link rel="stylesheet" href="tpl/index.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"


          <body>

        <!-- Side Navigation -->
          <!-- Side Navigation -->
        

        <!-- Overlay effect when opening the side navigation on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

        <!-- Page content -->
        <div class="w3-container" style="margin-top: 60px; height:100%">
            
            <nav class="w3-sidebar w3-quarter w3-bar-block w3-collapse w3-white w3-card" style="z-index:3;width:320px;" id="mySidebar"><a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
                                                                                                                                                             class="w3-bar-item w3-button w3-hide-large w3-large">Zatvori <i class="fa fa-remove"></i></a>
            <!--<a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a>-->

            <label class="w3-button w3-block w3-light-grey">Prijemno sanduče <i class="fa fa-inbox w3-margin-right"></i></label>

            <hr>
            [[foreach $poruke as $razgovor]]
            <form action="inbox.php" method="POST">
                <div class="w3-container">
                    [[if $korisnikMajstor]]
                    <h5 class="media-heading">[[$razgovor->musterija_email1]]</h5>
                     <input class="w3-button w3-block w3-red" type="submit" name="sbmRazgovor" value="Prikaži">
                    <input class="w3-button w3-block w3-red" type="hidden" name="majstorEmail" value=[[$razgovor->musterija_email1]]>
                    [[else]]
                    <h5 class="media-heading">[[$razgovor->majstor_email0]]</h5>
                     <input class="w3-button w3-block w3-red" type="submit" name="sbmRazgovor" value="Prikaži">
                    <input class="w3-button w3-block w3-red" type="hidden" name="majstorEmail" value=[[$razgovor->majstor_email0]]>
                    [[/if]]
                    
                   
                </div>
                <br>
                <hr style="border: 1px solid lightgray">
            </form>
            [[/foreach]]

        </nav>

     <div class="w3-main" style="margin-left:320px; height:100%">

            <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
            <a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display = 'block'"><i class="fa fa-pencil"></i></a>

            [[if $da]]
            <div class="message-wrap col-lg-8">
                <div class="msg-wrap">


                    <div class="media msg">
                        <a class="pull-left" href="#">
                            <!--<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">-->
                            [[if !$imaSlika]]
                              <img class="img-responsive iamgurdeeposahan" alt="avatar" src="slike/profAvatar.png" style="width: 100px; height: 150px;">
                              
                            [[else]]
                                <img class="img-responsive iamgurdeeposahan" alt="avatar" src="[[$slika]]" style="width: 100px; height: 150px;">
                                [[/if]]
                                
                        </a>
                        <div class="media-body" >
                            [[if $onlajn]]
                            <h3 class="media-heading">[[$ime]] <i class="fa fa-circle" style="color:green"></i></h3>
                            [[else]]
                            <h3 class="media-heading">[[$ime]]</h3>
                            [[/if]]
                                <p>[[$display]]</p>
                                [[if $prijavljenMajstor]]
                                <a href="profil.php?client=[[$emailM]]" class="w3-button w3-red" style="text-decoration: none"><i class="fa fa-user-o"></i> Prikaži profil</a>
                                [[else]]
                                <a href="profil.php?worker=[[$emailM]]" class="w3-button w3-red" style="text-decoration: none"><i class="fa fa-user-o"></i> Prikaži profil</a>
                                [[/if]]
                        </div>

                    </div>
                    [[if porukice!=NULL]]
                    [[foreach $porukice as $msg]]
                    <hr>
                    <div class="media msg">
                        [[if !$korisnikMajstor]]
                        [[if $msg->posiljaoc=="majstor"]]
                        <h6 style="color: blue"><i class="fa fa-comment-o fa-2x"></i> [[$ime]]</h6>
                        [[else]]
                        <h6 style="color: red"><i class="fa fa-comment-o fa-2x"></i> Ja</h6>

                        [[/if]]
                        [[else]]
                        [[if $msg->posiljaoc=="musterija"]]
                        <h6 style="color: blue"><i class="fa fa-comment-o fa-2x"></i> [[$ime]]</h6>
                        [[else]]
                        <h6 style="color: red"><i class="fa fa-comment-o fa-2x"></i> Ja</h6>

                        [[/if]]
                        [[/if]]

                        <small class="col-lg-10 w3-card w3-light-grey">[[$msg->tekst_poruke]]</small>
                        
                        <div class="media-body">
                            <small class="pull-right time"><i class="fa fa-clock-o"></i> [[$msg->datum_slanja_poruke]]</small>
                        </div>
                    </div>
                    [[/foreach]]
                    [[/if]]


                </div>

                <form action="inbox.php" method="POST">
                    <div class="send-wrap ">

                        <hr>
                        <label>Poruka</label>
                        <input class="w3-input w3-border w3-margin-bottom" name="txtPoruka" style="height:60px" placeholder="Ovde unesite vašu poruku">


                    </div>
                    <div class="btn-panel">
                        <button name="sbmPosaljiPoruku" type="submit" class="w3-button w3-red w3-right" onclick="document.getElementById('id01').style.display = 'none'">Pošalji  <i class="fa fa-paper-plane"></i></button>
                        <input type="hidden" name="emailMajstora" value=[[$emailM]]>
                    </div>
                </form>

                <br>
                <hr>
                <br>
            </div>
            [[/if]]

        </div>
        </div>
    </body>
</html> 
