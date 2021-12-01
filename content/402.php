<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i = 1;
    while($i <= 20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";

    echo "<label for='$i'>box ".$i."</label><br>";
    echo "<br>";
    $i++;
    }
?>
<h2>2. 20 Tektskasti tsükliga</h2>
    <?php
    $a = 1;
    while($a <= 5){
        echo "<input type='text' id='l.$a' name='texts[]' value='$a'>";

        echo "<label for='l.$a'>box ".$a."</label><br>";
        echo "<br>";
        $a++;
    }
    ?>
<h2>3. 20 Radionupud tsükliga</h2>
<?php
    $b = 1;
    while($b <= 5){
        echo "<input type='radio' id='k.$b' name='radio[]' value='$b'>";

        echo "<label for='k.$b'>box ".$b."</label><br>";
        echo "<br>";
        $b++;
    }
?>
</body>
</html><?php
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<a href="../test.php">tagasi...Ülesannete leht</a>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i = 1;
    while($i <= 20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";

    echo "<label for='$i'>box ".$i."</label><br>";
    echo "<br>";
    $i++;
    }
?>
<h2>2. 20 Tektskasti tsükliga</h2>
    <?php
    $a = 1;
    while($a <= 5){
        echo "<input type='text' id='l.$a' name='texts[]' value='$a'>";

        echo "<label for='l.$a'>box ".$a."</label><br>";
        echo "<br>";
        $a++;
    }
    ?>
<h2>3. 20 Radionupud tsükliga</h2>
<?php
    $b = 1;
    while($b <= 5){
        echo "<input type='radio' id='k.$b' name='radio[]' value='$b'>";

        echo "<label for='k.$b'>box ".$b."</label><br>";
        echo "<br>";
        $b++;
    }
?>
</body>
</html><?php
