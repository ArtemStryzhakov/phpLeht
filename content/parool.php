<?php
$parool = 'artem';
$sool = 'vagavagatekst';
$krypt = crypt($parool, $sool);
echo $krypt;
