<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="container">
<?php
$sitename = $_POST['sitename'];
$login = $_POST['login']; 
$password = $_POST['password'];
$host = $_POST['host'];
$hosting = $_POST['hosting'];
$reg_login = $_POST['reg_login']; 
$reg_password = $_POST['reg_password'];
$query = "INSERT INTO `sites`(`sitename`, `login`, `password`, `host`, `hosting`, `reg_login`, `reg_password`) VALUES ('$sitename', '$login', '$password', '$host', '$hosting', '$reg_login', '$reg_password')";
$result = mysql_query($query, $link);

// проверка
 if(!mysql_query($result)) { 
	echo '<center><p><b>Данные добавлены!</b></p></center>';
 } else {
	echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';
};
?>
</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>