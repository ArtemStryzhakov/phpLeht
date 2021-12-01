<?php
$servernimi = 'localhost';
$kasutajanimi = 'artemstryz';
$parool = '123456';
$andmebaasinimi = 'artemstryz';
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
