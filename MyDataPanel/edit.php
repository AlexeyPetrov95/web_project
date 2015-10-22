<?php
	include_once 'header.php';
?>
<div class="container">
<?php 
	if(isset($_GET['edit'])) {
    $edit = (int) $_GET['edit'];
	$select_sql = "SELECT * FROM sites WHERE id = $edit"; 
	$result = mysql_query($select_sql); 
	$row = mysql_fetch_array($result);
				echo "<form method='post' action='update.php'><input type='hidden' name='id' value=".$edit."><br/>";
				echo "<p>название сайта: <input type='text' size='30' name='sitename' value=".$row['sitename']."></p>";
				echo "<p>Логин: <input type='text' size='30' name='login' value=".$row['login']."></p>";
				echo "<p>Пароль: <input type='text' size='30' name='password' value=".$row['password']."></p>";
				echo "<p>Хост: <input type='text' size='30' name='host' value=".$row['host']."></p>";
				echo "<input type='submit' value='Обновить'></form>";
}
?>

</div>
<?php
	include_once 'footer.php';
?>