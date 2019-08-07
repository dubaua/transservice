<?
	$mail = 'deni.den.96@mail.ru';

	$theme = 'Новое сообщение';

	$letter = 'Данные сообщения'.'<br/>';
	// Нужно обязательно экранировать входящие данные, в которых могут ломануть данные на сервере.
	$letter .="Имя: ".stripcslashes(htmlspecialchars($_POST['name']));
	$letter .="\nEmail: ".stripcslashes(htmlspecialchars($_POST['email']));
	$letter .="\nТелефон: ".stripcslashes(htmlspecialchars($_POST['phone']));
	$letter .="\nСообщение: ".stripcslashes(htmlspecialchars($_POST['message']));

	mail($mail, $theme, $letter);
?>