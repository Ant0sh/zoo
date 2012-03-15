<?php
require "../other/smarty3/Smarty.class.php";
include('config.php');

$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->template_c = 'templates_c/';

$smarty->assign('title', 'Животные в зоопарке.');
$smarty->display('header.tpl');

$sql = "SELECT DISTINCT `vid`.`id`, `vid`
            FROM `vid`
                INNER JOIN `animal` ON `animal`.`vid_id`=`vid`.`id`
            ORDER BY `vid`";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)) {
    $vids[$row['id']] = $row['vid'];
}

$smarty->assign('vids', $vids);
$smarty->display('animal.tpl');
$smarty->display('footer.tpl');