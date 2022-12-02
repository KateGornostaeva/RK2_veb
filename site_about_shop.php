<?php
$title="About shop";//title, который название страницы

date_default_timezone_set("Europe/Moscow"); //дата, время
$today= date("d.m.y");
$time = date("G:i:s");

$s = date("s"); // определяем текущую секунду
$os = (int)$s % 2; // определяем текущую секунду

$img1;
?>

<?php require("header.php")?>
<?php require("about_shop.php")?>
<?php require("footer.php")?>