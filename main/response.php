<?php
//$mail = 'kvlads80@live.ru';
$mail = 'info@trans-s.su';

$theme = "ТРАНССЕРВИС";

$letter = "Данные сообщения:";
$letter .="\n\n";

$letter .="Имя: ".stripcslashes(htmlspecialchars($_POST['name']));
$letter .="\nEmail: ".stripcslashes(htmlspecialchars($_POST['email']));
$letter .="\nТелефон: ".stripcslashes(htmlspecialchars($_POST['phone']));
$letter .="\nСообщение: ".stripcslashes(htmlspecialchars($_POST['message']));

mail($mail, $theme, $letter);

header("Location: ./")
?>
