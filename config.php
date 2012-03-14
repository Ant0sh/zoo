<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "r00tt";
$dbname = "zoopark";

if(!mysql_connect($dbhost, $dbuser, $dbpwd)) {
    report_mysql_error("Не могу соединиться с сервером.", "", true);
}
if(!mysql_select_db($dbname)) {
    report_mysql_error("Не могу соединиться с базой.", "", true);
}
mysql_query("set character_set_results=cp1251");
mysql_query("set character_set_connection=cp1251");
mysql_query("set character_set_client=cp1251");

setlocale(LC_CTYPE, 'ru_RU.CP1251');
setlocale(LC_COLLATE, 'ru_RU.CP1251');