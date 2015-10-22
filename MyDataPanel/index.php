<?php
	require_once 'db.php';
	$query = "SELECT * FROM `sites`";
	$res = mysql_query($query);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<style>
table { border-collapse:separate; border:none; border-spacing:0; margin:8px 12px 18px 6px; line-height:1.2em; margin-left:auto; margin-right:auto; overflow: auto }
table th { font-weight:bold; background:#666; color:white; border:1px solid #666; border-right:1px solid white }
table th:last-child { border-right:1px solid #666 }
table caption { font-style:italic; margin:10px 0 20px 0; text-align:center; color:#666; font-size:1.2em }
tr{ border:none }
td { border:1px solid #666; border-width:1px 1px 0 0 }
td, th { padding:15px }
tr td:first-child { border-left-width:1px }
tr:last-child td { border-bottom-width:1px }
</style>
<title>Главная страница</title>
</head>

<body>
<a href="/add.php">Добавить</a><table>
<thead>
<th>Имя</th>
<th>Логин</th>
<th>Пароль</th>
<th>Хост</th>
</thead>
<tbody>
<?php
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
</body>
</html>