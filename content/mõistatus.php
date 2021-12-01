<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP algus</title>
</head>
<body>
<?php
echo "<h1>Tere hommikust!</h1>";
$tekst="Täna on esimene PHP tund";

echo $tekst;
echo "<br>";
echo "<h2>Matemaatika tehed. Mõistatus</h2>";
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1 = 15;
$arv2 = 5;
//kahe arvude liitmine (+)
echo "Kui liidame kokku, vastus on ".($arv1 + $arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastuseks on ".($arv1 / $arv2);

// esimene arv ruudus
echo "<br>";
echo "Esimene arv ruudus on ". pow($arv1, 2);

// lahutamine
echo "Kui eistest arvust lahutada esimene, siis vastus on ".($arv1 - $arv2);
echo "<br>";

// korrutis
echo "Kahe arvude korrutis on ".($arv1 * $arv2);
echo "<br>";
echo "<a href='vastus.php'>Õiged vastused</a>";

echo "<br>";
echo "<h2> Arva ära EESTI LINNANIMI</h2>";
$nimi = "dombass";
// esimene täht
echo "<br>Linnanimi pikkus: ".strlen($nimi);
echo "<br>Linnanimi 1.täht: ".substr($nimi, 0, 1);
echo "<br>";
echo "mitu korda esinevad tähed: ".strpbrk($nimi, 's');
echo "<br>";
$shuffled = str_shuffle($nimi);

// выведет что-то вроде этого: bfdaec
echo "Segane sõna on '".$shuffled."'";

?>
</body>
