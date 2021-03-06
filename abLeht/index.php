<?php
require ('conf.php');

// lisamine INSERT INTO
global $yhendus;
if (!empty($_REQUEST['loomanimi'])) {
    $kask = $yhendus->prepare('INSERT INTO loomad(nimi) VALUES (?)');
    // "s" - string
    //_REQUEST['loomanimi'] - запрос в текствовый ящик input
    $kask->bind_param("s", $_REQUEST['loomanimi']);
    $kask->execute();
    // изменяет адресную строку
        // $_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}

// tabelist kustutamine

if (isset($_REQUEST['kustuta'])){
    $kask = $yhendus -> prepare('DELETE from loomad where id = ?');
    $kask -> bind_param("i", $_REQUEST['kustuta']);
    $kask -> execute();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu näitamine</title>
</head>
<body>
<h1>
    Andmetabeli "Loomad" sisu näitamine
</h1>
<?php
global $yhendus;
// tabeli sisu näitamine
$kask = $yhendus -> prepare("SELECT id, nimi, kirjatus FROM loomad");
$kask -> bind_result($id, $nimi, $kirjeldus);
$kask -> execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Loomanimi</th>
<th>Kirjeldus</th>
<th>tegevus</th>
</tr>";

// fetch() - извлечение данных из набора данных
while($kask -> fetch()) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "<th><a href='$_SERVER[PHP_SELF]?kustuta=$id'>xxx</a></th>";
    echo "</tr>";
}
echo "</table>";

?>
<?php
$kask->close();
?>
<br><br>
<form action = "" method="post">
    <label for="loomanimi">Loomanimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <input type="submit" value="Lisa">
</form>
</body>
</html>
