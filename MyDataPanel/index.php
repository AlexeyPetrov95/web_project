<?php
	include_once 'header.php';
?>
<div class="container">
<table>
<thead>
<th>Имя</th>
<th>Логин</th>
<th>Пароль</th>
<th>Хост</th>
</thead>
<tbody>
<?php
	$query = "SELECT * FROM `sites`";
	$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['sitename']."</td>";
echo "<td>".$row['login']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td>".$row['host']."</td>";
echo "</tr>";
}
?>
</tbody>
</table>
</div>
<?php
	include_once 'footer.php';
?>