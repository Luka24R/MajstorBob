<?php

include_once 'MySmarty.php';
include_once 'DB.php';

session_start();

$db = new DB();
$smarty = new MySmarty();

include_once 'header.php';
$smarty->assign("prijavljenMajstor", $prijavljenMajstor);
$smarty->assign("prijavljenMusterija", $prijavljenMusterija);
$smarty->assign("prijavljenAdmin", $prijavljenAdmin);

if (isset($_SESSION["musterija"])) {

    if (isset($_POST["btnMojiOglasi"])) {
        //$prijavljen=true;

        $email = $_POST["hdnEmail"];
        $oglasi = $db->vratiOglaseMusterije($email);
        //$email=$_SESSION["musterija"];
        /* $email='a';
          $oglasi=$db->vratiSveOglase(); */
        $smarty->assign("oglasi", $oglasi);

        // $smarty->assign("prijavljen", $prijavljen);
        //$smarty->display('header.tpl');
        $smarty->display('mojiOglasi.tpl');
    } else {
        //$prijavljen=true;

        $email = $_SESSION["musterija"];
        //$email=$_POST["hdnEmail"];
        $oglasi = $db->vratiOglaseMusterije($email);
        $smarty->assign("oglasi", $oglasi);

        //$smarty->assign("prijavljen", $prijavljen);
        //$smarty->display('header.tpl');
        $smarty->display('mojiOglasi.tpl');

        // header("location:index.php");
    }
} else {
    if (isset($_GET["prijava"])) {
        $email = $_GET["prijava"];

        $oglasi = $db->vratiPrijavljeneOglaseZaMajstora($email);
        $smarty->assign("oglasi", $oglasi);


        $smarty->display('mojiOglasi.tpl');
    }
}

include_once 'footer.php';
