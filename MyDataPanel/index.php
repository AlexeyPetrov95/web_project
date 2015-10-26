<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');

?>
<div class="container">
<table class="striped">
	<thead>
		<th>Сайт</th>
		<th>Админка</th>
		<th>Логин</th>
		<th>Пароль</th>
		<th>Регистратор</th>
		<th>Логин</th>
		<th>Пароль</th>
		<th>Описание</th>
		<th>Действия</th>
	</thead>
	<tbody>
		<?php
		$res = mysql_query($query);
		while($row = mysql_fetch_array($res))
			{
				echo "<tr>";
				echo "<td><h6>".$row['sitename']."</h6></td>";
				echo "<td>";
				if ($row['host'] == "") {
				echo "Нет";
				} else {
				echo "<a href=".$row['host'].">Войти</a>";
				};
				echo "</td>";
				echo "<td>".$row['login']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td>".$row['hosting']."</td>";
				echo "<td>".$row['reg_login']."</td>";
				echo "<td>".$row['reg_password']."</td>";
				echo "<td>".$row['descr']."</td>";
				echo "<td><a name=\"del\" href=\"del/index.php?del=".$row['id']."\"><i class='material-icons mdi-action-delete'></i></a> | <a name=\"editor\" href=\"edit/index.php?edit=".$row['id']."\"><i class='material-icons mdi-editor-mode-edit'></i></a></td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>