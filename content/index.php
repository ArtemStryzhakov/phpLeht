<?php
require('conf.php');
//функция, которая удаляет из адресной строки переменные
function clearVarsExcept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']), "?");
}
global $yhendus;
//lisamine ISERT INTO
if(!empty($_REQUEST['loomanimi'])){
    $kask=$yhendus->prepare('INSERT INTO loomad(nimi, kirjatus) VALUES(?, ?)');
    $kask->bind_param('ss', $_REQUEST['loomanimi'], $_REQUEST['kirj']); // s - string
    $kask->execute();
    //изменяет адресную строку
    //$_SERVER[PHP_SELF] - до имени файла
    //header("Location:" .basename($_SERVER['REQUEST_URI']));
}
//kustuta
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare('DELETE FROM loomad WHERE id=?');
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu lisamine naitamine</title>
</head>
<body>
<h1>
    Andmetabeli "Loomad" sisu naitamine
</h1>
<?php
global $yhendus;
//tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, nimi, kirjatus FROM loomad");
$kask->bind_result($id,$nimi,$kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Loomanimi</th>
<th>Kirjeldus</th>
<th>Kustuta</th>
</tr>";
//fetch() - извлечение данных из набора данных
while ($kask->fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "<td><a href='".clearVarsExcept(basename($_SERVER['REQUEST_URI']), "leht")."&kustuta=$id'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
?>
<form class="rightcolumn" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']), 'leht')?>" method="post">
    <label for="loomanimi">Loomanimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <br><br>
    <label for="kirj">Kirjeldus</label>
    <input type="text" name="kirj" id="kirj">
    <input type="submit" value="Lisa">
</form>
<?php
$yhendus->close();
?>
</body>
</html>
