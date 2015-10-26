<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="container">
<?php
$id = $_POST['id'];
$sitename = $_POST['sitename'];
$login = $_POST['login']; 
$password = $_POST['password'];
$host = $_POST['host'];
$hosting = $_POST['hosting'];
$reg_login = $_POST['reg_login']; 
$reg_password = $_POST['reg_password'];
$descr = $_POST['descr'];
$query = "UPDATE sites SET sitename='$sitename', login='$login', password='$password', host='$host', hosting='$hosting', reg_login='$reg_login', reg_password='$reg_password', descr='$descr' WHERE id='$id'";
$result = mysql_query($query, $link);
// проверка
 if(!mysql_query($result))
 {echo '<center><p><b>Данные добавлены!</b></p></center>';} 
 else 
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';}
?>
</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>