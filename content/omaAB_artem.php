<?php
require('conf.php');
//функция, которая удаляет из адресной строки переменные
function clearVarsExcept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']), "?");
}
global $yhendus;
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
</tr>";
//fetch() - извлечение данных из набора данных
while ($kask->fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>

<?php
$yhendus->close();
?>
</body>
</html>
