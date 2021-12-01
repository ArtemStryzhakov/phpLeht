<?php
require('conf.php');
//функция, которая удаляет из адресной строки переменные
function clearVarsExcept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']), "?");
}
global $yhendus;
//lisamine INSERT INTO
if(!empty($_REQUEST['raamatnimi'])){
    $kask=$yhendus->prepare('INSERT INTO raamatukogu(raamat, zanr) VALUES(?, ?)');
    $kask->bind_param('ss', $_REQUEST['raamatnimi'], $_REQUEST['zanr']); // s - string
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]");
    //изменяет адресную строку
    //$_SERVER[PHP_SELF] - до имени файла
    //header("Location:" .basename($_SERVER['REQUEST_URI']));
}
//kustuta
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare('DELETE FROM raamatukogu WHERE id=?');
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu lisamine naitamine</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<div>
    <p><?=$_SESSION['kasutaja']?> on sisse logitud</p>
    <form action="logout_oma.php" method="post">
        <input type="submit" value=" Logi välja" name="logout">
    </form>
</div>
<h1>
    Andmetabeli "Raamatukogu" sisu naitamine
</h1>
<?php
global $yhendus;
//tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, raamat, zanr FROM raamatukogu");
$kask->bind_result($id,$nimi,$kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Raamat</th>
<th>Zanr</th>
<th>Kustuta</th>
</tr>";
//fetch() - извлечение данных из набора данных
while ($kask->fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "<td><a href='".clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")."?kustuta=$id'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>
<form class="rightcolumn" action="" method="post">
    <label for="loomanimi">Raamat</label>
    <input type="text" name="raamatnimi" id="raamatnimi">
    <br><br>
    <label for="zanr">Zanr</label>
    <input type="text" name="zanr" id="zanr">
    <br>
    <input type="submit" value="Lisa">
</form>
<?php
$yhendus->close();
?>
</body>
</html>
