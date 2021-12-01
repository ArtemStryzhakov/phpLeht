<?php
// login vorm koodis kirjutatud kasutajanimega ja prooliga
session_start();
if(isset($_SESSION['tuvastamine'])){
    header('Location: puuLeht.php');
    exit();
}

// login ja pass kontroll
if(!empty($_POST['login']) && !empty($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];

    if($login == 'artem' && $pass == '123456'){
        $_SESSION['tuvastamine'] = 'niilihtne';
        header('Location: puuLeht.php');
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

<?php
/*
create table kasutaja(
    id int primary key AUTO_INCREMENT,
    nimi varchar(10),
    parool varchar(200),
    onAdmin tinyint,
    koduleht varchar(100)
)
*/