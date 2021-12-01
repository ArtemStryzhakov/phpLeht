<?php
session_start();
if(!isset($_SESSION['tuvastamine'])){
    header('Location: loginAB_oma.php');
    exit();
}
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    // aadressi reas avatakse login.php fail
    header('Location: loginAB_oma.php');
    exit();
}
