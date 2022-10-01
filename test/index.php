<?php
	/**
	 * Example Application
	 *
	 * @package Example-application
	 */
	
	require '../libs/Smarty.class.php';
	require 'question.php';
	$smarty = new Smarty;
	$question_num=0;
	$content_id=0;
	$is_select_option="";
	$get_user_data= $_SESSION['user_history'];
	$json_files_data = file_get_contents('../question.json');
	$json_data = json_decode($json_files_data, true);
	$total_length= count($json_data);
	$option_list_array= array("A","B","C","D");
	$question_data = json_decode($json_data[$question_num]['content_text'], true);
	$content_id= $json_data[$question_num]['content_id'];
	$selected_options = fetch_user_select_option($get_user_data,$content_id);
	$smarty->assign("question_sr",$question_num);
	$smarty->assign("is_select_option",$is_select_option);
	$smarty->assign("content_id",$content_id);
	$smarty->assign("selected_options",$selected_options);
	$smarty->assign("option_list_array",$option_list_array);
	$smarty->assign("title","Prep Test");
	$smarty->assign("Name","Test Prep");
	$smarty->assign("total_data",$total_length);
	$smarty->assign("test_data",$question_data);
	$smarty->assign("q_id",$question_data);
	// display it 
	$smarty->display('../templates/test.tpl'); 
?>
