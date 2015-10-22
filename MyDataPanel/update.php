<?php
	include_once 'header.php';
?>
<div class="container">
<?php
$id = $_POST['id'];
$sitename = $_POST['sitename'];
$login = $_POST['login']; 
$password = $_POST['password'];
$host = $_POST['host'];
$query = "UPDATE sites SET sitename='$sitename', login='$login', password='$password', host='$host' WHERE id='$id'";
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