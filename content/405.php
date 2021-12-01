<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>405</title>
    <style>
        table ,td{
            border: solid 1px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 405 - Korrutustabel 2 tsükliga</h1>
<?php
    echo "<table>";

    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++){
            $val = $i * $j;
            echo "<td>" . $val . "</td>";

        }
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>
