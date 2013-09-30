<?php
$id = $_GET['id'];
$ids = "<id>$id</id><ip>{$_SERVER['REMOTE_ADDR']}</ip>\n";
$f = fopen('log.acclogs', "a+");
fwrite($f, $ids);
fclose($f);
header('location:http://www.planroomdirect.com/group/cedar-ridge-general-contracting');
?>