<?php
$servernimi = 'd105623.mysql.zonevs.eu';
$kasutajanimi = 'd105623_stryzhak';
$parool = 'Art02fal+!';
$andmebaasinimi = 'd105623_artemandm';
$yhendus = new mysqli($servernimi, $kasutajanimi, $parool, $andmebaasinimi);
$yhendus -> set_charset('UTF8');
/*
 * create table loomad(
    id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    kirjatus text);

insert into loomad(nimi, kirjatus)
value('pesukaru', 'siia tuleb kirjeldus');

SELECT * from loomad*/
?>
