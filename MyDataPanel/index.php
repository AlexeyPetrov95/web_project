<?php
	include_once 'header.php';
?>
<div class="container">
<table>
	<thead>
		<th>Логин</th>
		<th>Пароль</th>
		<th>Хост</th>
		<th>Действия</th>
	</thead>
	<tbody>
		<?php
		$res = mysql_query($query);
		while($row = mysql_fetch_array($res))
			{
				echo "<tr class='cyan'>";
				echo "<td colspan='4'><h6>".$row['sitename']."</h6></td>";
				echo "</tr><tr>";
				echo "<td>".$row['login']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td><a href=".$row['host'].">".$row['host']."</a></td>";
				echo "<td><a name=\"del\" href=\"del.php?del=".$row['id']."\">Удалить</a> | <a name=\"editor\" href=\"edit.php?edit=".$row['id']."\">Редактировать</a></td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
</div>
<?php
	include_once 'footer.php';
?>