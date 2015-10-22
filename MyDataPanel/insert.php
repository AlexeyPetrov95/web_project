<?php
	include_once 'header.php';
?>
<div class="container">
<?php
$sitename = $_POST['sitename'];
$login = $_POST['login']; 
$password = $_POST['password'];
$host = $_POST['host'];
$query = "INSERT INTO `sites`(`sitename`, `login`, `password`, `host`) VALUES ('$sitename', '$login', '$password', '$host')";
$result = mysql_query($query, $link);
// проверка
 if(!mysql_query($result))
 {echo '<center><p><b>Данные добавлены!</b></p></center>';} 
 else 
 {echo '<center><p><b>Ошибка при добавлении данных!</b></p></center>';}
?>
</div>
<?php
	include_once 'footer.php';
?>