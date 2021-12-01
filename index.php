<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Stryzhakov PHP Leht</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">;
    <script src="JS/legoScript.js"></script>
    <script src="JS/puzzleScript.js"></script>
    <script src="JS/kalculator.js"></script>
</head>
<body>
<?php
    include('header.php');
    include('navigation.php');
?>
<!--main-->
<main>
    <?php
        if(isset($_GET['leht'])){
            include('content/'.$_GET['leht'].'.php');
        }
        else {
            include('content/_main.php');
        }
    ?>
</main>

<?php
include('footer.php');
?>

</body>
</html><?php
