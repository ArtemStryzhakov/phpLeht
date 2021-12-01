<?php
// andmed massiivis

$data=[
    "nimi" => "Artem Stryzhakov",
    "aadrees" => "Sõpruse pst 184, Tallinn",
    "pilt" => "harjutused/troll.png",
    "koduleht" => "https://stryzhakov20.thkit.ee"
];
?>
<br>
<a href="../index.php?leht=harjutused">tagasi...Ülesannete leht</a>

<h1>Ülesanne 401</h1>
<p> <b>
        <?=$data["nimi"]?>
    </b></p>
<p><i>
        <?=$data["aadrees"]?>
    </i></p>
<img src="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">Minu koduleht</a>
<!--massiiv array funktiooniga-->
<h1>Ülesanne 401/var 2 - array() </h1>
<?php
$array = array("Artem Stryzhakov", "Sõpruse pst 184, Tallinn", "stryzhakov20.thkit.ee");
echo "<b>Nimi: ".$array[0]."</b><br>";
echo "<i> Aadress: ".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br> <a href='https://$array[3]' >Minu koduleht</a>";