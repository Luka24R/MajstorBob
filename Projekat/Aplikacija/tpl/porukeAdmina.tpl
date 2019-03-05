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
            [[foreach $poruke as $email]]
            <form action="inboxAdmina.php" method="POST">
                <div class="w3-container">
                    
                    <h5 class="media-heading">[[$email]]</h5>
                     
                     <input class="w3-button w3-block w3-red" type="submit" name="sbmRazgovor" value="Prikaži">
                    <input class="w3-button w3-block w3-red" type="hidden" name="emailKorisnika" value=[[$email]]>
                    
                    
                   
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
                           
                            [[if !$imaSlika]]
                            
                              <img class="img-responsive " alt="avatar" src="slike/profAvatar.png" style="width: 100px; height: 150px;">
                            
                            [[else]]
                            <div class="imgcontainer " style="width: 100px; height: 150px;">
                                <img class="img-responsive " alt="avatar" src="[[$slika]]" style="height: 100%;"  >
                                </div>
                                [[/if]]
                                
                        </a>
                        <div class="media-body"  >
                            [[if $onlajn]]
                            <h3 class="media-heading">[[$ime]] <i class="fa fa-circle" style="color:green"></i></h3>
                            [[else]]
                            <h3 class="media-heading">[[$ime]]</h3>
                            [[/if]]
                                <p>[[$display]]</p>
                                [[if !$profilMajstora]]
                                <a href="profil.php?client=[[$emailKorisnika]]" class="w3-button w3-red" style="text-decoration: none"><i class="fa fa-user-o"></i> Prikaži profil</a>
                                [[else]]
                                <a href="profil.php?worker=[[$emailKorisnika]]" class="w3-button w3-red" style="text-decoration: none"><i class="fa fa-user-o"></i> Prikaži profil</a>
                                [[/if]]
                        </div>

                    </div>
                    [[if porukice!=NULL]]
                    [[foreach $porukice as $msg]]
                    <hr>
                    <div class="media msg">
                     
                        [[if $msg->posiljaoc=="majstor" && $msg->majstor_email0=="admin"]]	
                         <h6 style="color: red"><i class="fa fa-comment-o fa-2x"></i> Admin </h6>
                        [[else]]
                        [[if $msg->posiljaoc=="musterija" && $msg->musterija_email1=="admin"]]
                         <h6 style="color: red"><i class="fa fa-comment-o fa-2x"></i> Admin </h6>>
                        [[else]]
                        <h6 style="color: blue"><i class="fa fa-comment-o fa-2x"></i>[[$ime]]</h6>
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

                <form action="inboxAdmina.php"  method="POST">
                    <div class="send-wrap ">

                        <hr>
                        <label>Poruka</label>
                        <input class="w3-input w3-border w3-margin-bottom" name="txtPoruka" style="height:60px" placeholder="Ovde unesite Vašu poruku">


                    </div>
                    <div class="btn-panel">
                        <button name="sbmPosaljiPoruku" type="submit" class="w3-button w3-red w3-right" onclick="document.getElementById('id01').style.display = 'none'">Pošalji  <i class="fa fa-paper-plane"></i></button>
                        <input type="hidden" name="emailKorisnika" value=[[$emailKorisnika]]>
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
