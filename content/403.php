<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 403</title>
</head>
<body>
    <a href="../test.php">tagasi...Ülesannete leht</a>
    <h1>Ülesanne 403</h1>
    <?php
    //ilusad värvi nimed massiivis
    $varv = array("red", "blue", "yellow", "orange", "grey", "coral", "Aqua", "Chartreuse", "brown", "black", "Crimson", "DarkBlue", "DarkMagenta", "FireBrick", "Gold");
    //tsükliga kuvame värvid massiivist
    for($i = 0; $i < 15; $i++){
        echo "<span style='color: $varv[$i]' > $varv[$i]</span>";
        echo "<br>";
    }

    ?>
</body>
</html>
