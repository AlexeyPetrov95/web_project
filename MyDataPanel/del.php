<?php
	include_once 'header.php';
?>
<div class="container">
<?php
	if(isset($_GET['del'])) {
    $del = (int) $_GET['del'];
    $query = "DELETE FROM `sites` WHERE `id` = $del";
    mysql_query($query) or die("<p>При удалении произошла ошибка</p>". mysql_error()); echo "<p>Запись была успешно удалена!</p>";
} 
?>
</div>
<?php
	include_once 'footer.php';
?>