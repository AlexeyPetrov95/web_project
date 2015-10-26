<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="container">
<?php 
	if(isset($_GET['edit'])) {
    $edit = (int) $_GET['edit'];
	$select_sql = "SELECT * FROM sites WHERE id = $edit"; 
	$result = mysql_query($select_sql); 
	$row = mysql_fetch_array($result);
		echo "<form method='post' action='update.php'><input type='hidden' name='id' value=".$edit."><br/>";
		echo "<div class='input-field'><input type='text' size='30' name='sitename' value=".$row['sitename']."><label for='sitename'>Название сайта</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='host' value=".$row['host']."><label for='host'>Админка</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='login' value=".$row['login']."><label for='login'>Логин</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='password' value=".$row['password']."><label for='password'>Пароль</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='hosting' value=".$row['hosting']."><label for='hosting'>Регистратор</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='reg_login' value=".$row['reg_login']."><label for='reg_login'>Логин</label></div>";
		echo "<div class='input-field'><input type='text' size='30' name='reg_password' value=".$row['reg_password']."><label for='reg_password'>Пароль</label></div>";
		echo "<div class='input-field'><textarea type='text' size='30' name='descr' value=".$row['descr']."></textarea><label for='descr'>Описание</label></div>";
		echo "<input type='submit' value='Обновить'></form>";
}
?>

</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>