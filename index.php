<?php
		session_start();
		if(!empty($_SESSION['user_history'])){
			session_destroy();
		}
	require 'libs/Smarty.class.php';
	$smarty = new Smarty;
	
	$smarty->assign('title','Prep Test');
	
	$smarty->display('templates/index.tpl'); 
?>
