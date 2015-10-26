<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');

?>
<div class="container">
<?php
$sql = "CREATE TABLE IF NOT EXISTS `sites2` (
		  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `sitename` char(64) NOT NULL,
		  `login` text NOT NULL,
		  `password` text NOT NULL,
		  `host` text NOT NULL,
		  `hosting` text NOT NULL,
		  `reg_login` text NOT NULL,
		  `reg_password` text NOT NULL,
		  `descr` text NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;";
	if (mysql_query($sql))
        echo "Создание таблицы завершено";
    else
        echo "Таблицу создать не удалось";
	?>
</div>
<?php
	include_once ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>