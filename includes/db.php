<?php



$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
); // подключаемся к бд

if ($connection == false)    // условие. если данные не верны, соединение закрывается
{
	echo "Не удалось подключиться к бд";
	echo mysqli_connect_error();
	exit();
}
