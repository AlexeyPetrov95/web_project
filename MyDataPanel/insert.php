<?php
	require_once 'db.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Основы PHP и MySQL</title>
<style>
* { font-family:Calibri }
</style>
</head>
<body>
<?php
 $sitename = $_POST['sitename'];
 $login = $_POST['login']; 
 $password = $_POST['password'];
 $host = $_POST['host'];
$query = "INSERT INTO `sites`(`sitename`, `login`, `password`, `host`) VALUES ('$sitename', '$login', '$password', '$host')";
$result = mysql_query($link, $query);
// проверка
 if(!mysql_query($result))
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';} 
 else 
 {echo '<center><p><b>Данные добавлены!</b></p></center>';}
?>