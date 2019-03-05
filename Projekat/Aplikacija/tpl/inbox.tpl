<!DOCTYPE html>
<html>
    <head>
        <title>MajstorBOB | Poruke</title>
        <link rel="stylesheet" href="tpl/index.css">
    </head>
<body>
    
    <div class="topnav" id="myTopnav">
    <a href="index.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-cogs w3-margin-right"></i>MajstorBob</a>
    <a href="profil.php" class="w3-bar-item w3-button w3-mobile">Moj profil</a>
    <a href="inbox.php" class="w3-bar-item w3-button w3-mobile">Poruke</a>
    <a href="pomoc.php" class="w3-bar-item w3-button w3-mobile">Pomoć</a>
    <a href="kontakt.php" class="w3-bar-item w3-button w3-mobile">O nama</a>
    
    <a href="postaviOglas.php" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Postavi oglas</a>
    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Prijavi se</a>
    <a href="#" onclick="document.getElementById('id02').style.display='block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Odjavi se</a>
    <a href="#" onclick="document.getElementById('id03').style.display='block'" class="w3-bar-item w3-button w3-right w3-red w3-mobile">Registruj se</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>

<!-- Modal Prijavi se-->
<div id="id01" class="w3-modal" style=" margin-top: 50px;">
  <div class="w3-modal-content">

    <header class="w3-container w3-red"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Uloguj se</h2>
      <p>Unesite vašu imejl adresu i lozinku da biste se prijavili.</p>
    </header>

      <form action="actionLogovanje.php" method="post">
    <div class="w3-container">
        <br>
      <label><i class="fa fa-at"></i> Imejl adresa</label>
      <input class="w3-input w3-border" type="text" name="txtImejl" required>
      
      <label><i class="fa fa-lock"></i> Lozinka</label>
      <input class="w3-input w3-border" type="password" name="txtLozinka" required>
      <span class="txtImejl"><a href="#">Zaboravili ste lozinku?</a></span>
  
      <hr>

      <button type="submit" name='btn' class="w3-button w3-half w3-green"><i class="fa fa-check"></i> Prijavi se</button>
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-half w3-red"><i class="fa fa-remove"></i> Odustani</span>
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
          <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Odjavi se</h2>
      <p>Da li ste sigurni da želite da se odjavite?</p>
      </div>
      
      <div class="w3-container">
          <hr>
      <form action="actionOdjavljivanje.php" method="post">
   
        <button type="submit" name='btn' class="w3-button w3-half w3-red"><i class="fa fa-remove"></i> Da</button>
      <span onclick="document.getElementById('id02').style.display='none'" 
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
          <span onclick="document.getElementById('id03').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Registruj se</h2>
      <p>Koji tip korisnika želite da budete?</p>
      </div>
      
      <div class="w3-container">
          <hr>
          <form action="actionRegistrovanje.php" method="post">
   
        <button type="submit" name='btn' value='majstor' class="w3-button w3-half w3-grayscale-max"><i class="fa fa-wrench"></i> Majstor</button>
        <button type="submit" name='btn' value='musterija' class="w3-button w3-half w3-grayscale-min"><i class="fa fa-handshake-o"></i> Mušterija</button>
      <br>
      <br>
      </form>
          </div>

  </div>
</div>

<!-- Modal Zaboravljena lozinka-->
<div id="id04" class="w3-modal">
  <div class="w3-modal-content">

      <div class="w3-container w3-red">
          <span onclick="document.getElementById('id04').style.display='none'" 
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
        <button type="reset" name="btnReset" onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-half w3-grayscale-min">Odustani</button>
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
<!--<head>
<link rel="stylesheet" type="text/css" href="tpl/inbox.css">
</head>


<h2>Poruke</h2>
[[foreach $poruke as $razgovor]]
<form action="">
<div class="container">
  <img src="tpl/worker.png" alt="Avatar" style="width:100%;">
  <p>[[$razgovor->majstor_email0]]</p>
  <p>[[$razgovor->tekst_poruke]] [[$razgovor->datum_slanja_poruke]]</p>
  <button type="button" class="btn-right">Sve Poruke</button>
  <!--<span class="time-left">11:00</span>
</div>
</form>
[[/foreach]]-->
  <!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
-->

<!------ Include the above in your HEAD tag ---------->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="btn-panel btn-panel-conversation">
                <a href="" class="btn  col-lg-6 send-message-btn " role="button"><i class="fa fa-search"></i> Search</a>
                <a href="" class="btn  col-lg-6  send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Nova poruka</a>
            </div>
        </div>

       
    </div>
    <div class="row">

        <div class="conversation-wrap col-lg-3">

        [[foreach $poruke as $razgovor]]
        <form action="inbox.php" method="POST">
            <div class="media conversation" onclick="myFunction()">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">[[$razgovor->majstor_email0]]</h5>
                            <input type="submit" name="sbmRazgovor" value="Prikaži">
                            <input type="hidden" name="majstorEmail" value=[[$razgovor->majstor_email0]]>
                        </div>
                    </div>
        </form>
        [[/foreach]]
           
        </div>


        [[if $da]]
        <div class="message-wrap col-lg-8">
            <div class="msg-wrap">


                <div class="media msg" style="background-color: skyblue" >
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                    </a>
                    <div class="media-body" >
                        <small class="pull-right time"><i class="fa fa-clock-o"></i> Razgovor</small>
                        <h5 class="media-heading">[[$ime]]</h5>
                        <small class="col-lg-10">
                            <p>[[$display]]</p>
                        </small>
                    </div>
                    
                </div>
                [[if porukice!=NULL]]
                [[foreach $porukice as $msg]]
                    <div class="media msg">
                        [[if $msg->posiljaoc=="majstor"]]
                        <h6>[[$ime]]</h6>
                        
                   
                        [[else]]
                        <h6>ja</h6>
                
                         [[/if]]
                            
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                    </a>    
                            
                            <small class="col-lg-10">[[$msg->tekst_poruke]]</small>
                            <div class="media-body">
                            <small class="pull-right time"><i class="fa fa-clock-o"></i> [[$msg->datum_slanja_poruke]]</small>
                            </div>
                    </div>
                [[/foreach]]
                [[/if]]
                
               
            </div>
            
            <form action="inbox.php" method="POST">
                <div class="send-wrap ">

                    <textarea class="form-control send-message" name="txtPoruka" rows="3" placeholder="Napišite odgovor..."></textarea>


                </div>
                <div class="btn-panel">

                    <!--<a href="inbox.php?emailMajstora=[[$emailM]]" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> Posalji poruku</a>
                    -->
                    <input type="submit" name="sbmPosaljiPoruku" value="Pošalji poruku"> 
                    <input type="hidden" name="emailMajstora" value=[[$emailM]]>
                </div>
            </form>

        </div>
        [[/if]]
               
    </div>
               
</div>
               


</body>
</html>
