<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="container">
	<form method="post" action="insert.php">
	  <div class="input-field"><input type="text" size="30" name="sitename"><label for="sitename">Название сайта</label></div>
	  <div class="input-field"><input type="text" size="45" name="login"><label for="login">Логин</label></div>
	  <div class="input-field"><input type="text" size="100" name="password"><label for="password">Пароль</label></div>
	  <div class="input-field"><input type="text" size="100" name="host"><label for="host">Админка</label></div>
	  <div class="input-field"><input type="text" size="45" name="hosting"><label for="hosting">Регистратор</label></div>
	  <div class="input-field"><input type="text" size="45" name="reg_login"><label for="reg_login">Логин</label></div>
	  <div class="input-field"><input type="text" size="100" name="reg_password"><label for="reg_password">Пароль</label></div>
	  <div class="input-field"><textarea type="text" size="100" name="descr"></textarea><label for="descr">Описание</label></div> 
	  <input type="submit" value="Добавить запись">
	</form>
</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>