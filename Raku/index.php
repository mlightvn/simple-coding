<?php

require ('config/bootstrap.php');

$smarty = new CodeSmart();

$smarty->assign('p1', "paragraph 1.");
$smarty->assign('link', '<a href="https://coxanh.net">https://coxanh.net</a>');
$smarty->assign('user_name', 'Code Smart');

$smarty->display('test.php');

?>
