<?php
	include_once 'header.php';
?>
<div class="container">
<form method="post" action="insert.php">
  <p>название сайта: <input type="text" size="30" name="sitename"></p>
  <p>логин: <input type="text" size="45" name="login"></p>
  <p>пароль: <input type="text" size="100" name="password"></p>
  <p>хост: <input type="text" size="100" name="host"></p>
  <input type="submit" value="Добавить запись">
</form>
</div>
<?php
	include_once 'footer.php';
?>