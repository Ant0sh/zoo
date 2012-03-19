<?php
include("functions.php");
include("config.php");
$id =3;
$sql = "DELETE FROM `lotion`
				WHERE `id`='".$id."'";
if(!mysql_query($sql)){
	reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
}
echo "asdasdasdasd";