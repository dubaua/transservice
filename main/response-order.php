<?php

header('Content-Type: text/html; charset=utf-8');
$mail = 'info@trans-s.su';
$theme = "ТРАНССЕРВИС";
$title = "Заявка со страницы https://www.trans-s.su/order.html \n\n";

$package_name = "\n Наименование посылки: " . htmlspecialchars($_POST['package-name']);
$dest_from = "\n Откуда: " . htmlspecialchars($_POST['dest-from']);
$dest_to = "\n Куда: " . htmlspecialchars($_POST['dest-to']);
$sizes = "\n Размеры: " . htmlspecialchars($_POST['sizes']);
$weight = "\n Вес: " . htmlspecialchars($_POST['weight']);
$space = "\n Объём: " . htmlspecialchars($_POST['space']);
$phone = "\n Телефон: " . htmlspecialchars($_POST['phone']);
$comment = "\n Коммент: " . htmlspecialchars($_POST['comment']);



$letter = $title . $package_name . $dest_from . $dest_to . $sizes . $weight . $space . $phone . $comment;

mail($mail, $theme, $letter);

header("Location: https://www.trans-s.su/order.html");
?>
