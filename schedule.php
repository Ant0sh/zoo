<?php
require "../other/smarty3/Smarty.class.php";
include('config.php');

$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->template_c = 'templates_c/';

$smarty->assign('title', 'График работы зоопарка.');
$smarty->display('header.tpl');

$sql = "SELECT DISTINCT `location`, `schedule`
            FROM `location`
                INNER JOIN `vid` ON `vid`.`location_id`=`location`.`id`
                INNER JOIN `animal` ON `animal`.`vid_id`=`vid`.`id`
            ORDER BY `location`";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)) {
    $location[$row['location']] = $row['schedule'];
}

$smarty->assign('location', $location);
$smarty->display('location.tpl');
$smarty->display('footer.tpl');