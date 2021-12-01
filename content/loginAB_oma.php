<?php
// login vorm Andmebaasis salvestatud kasutajanimega ja parooliga
session_start();
if(isset($_SESSION['tuvastamine'])){
    header('Location: puuLeht.php');
    exit();
}

// login ja pass kontroll
if(!empty($_POST['login']) && !empty($_POST['pass'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sool = 'vagavagatekst';
    $krypt = crypt($pass, $sool);
    // kontrollime kas andmebaasis on selline kasutaja
    require('conf.php');
    global $yhendus;
    $kask = $yhendus->prepare("SELECT nimi, onAdmin, koduleht FROM kasutaja WHERE nimi=? AND parool=?");
    $kask->bind_param("ss", $login, $krypt);
    $kask->bind_result($nimi, $onAdmin, $koduleht);
    $kask->execute();


    if(isset($_REQUEST['muutmine']) && $_SESSION['onAdmin'] == 1){
       header("Location: omaAB_admin.php");
    }
    else{
        header("Location: omaAB_artem.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<h1>Login vorm</h1>
<form action="" method="post">
    Login:
    <input type="text" name="login" placeholder="kasutaja nimi">
    <br>
    Parool:
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Logi sisse">
</form>
</body>
</html>