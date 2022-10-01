<?php
	
	/**
	 * Example Application
	 *
	 * @package Example-application
	 */
	session_start();
	require '../libs/Smarty.class.php';
	date_default_timezone_set('Asia/Kolkata');
	$smarty = new Smarty;
	$json_files_data = file_get_contents('../question.json');
	$json_data = json_decode($json_files_data, true);
	$total_length= count($json_data);
	$question_num=0;
	$content_id=0;
	$selected_option=0;
	if( isset($_GET['item_id']) && isset($_GET['content_id']) && isset($_GET['select_option']) ){
		$question_num= (int) $_GET['item_id']-1;
		$content_id= $_GET['content_id'];
		$selected_option= $_GET['select_option'];
	}
	$option_list_array= array("A","B","C","D");
	$question_data = json_decode($json_data[$question_num]['content_text'], true);
	$is_user_select_option=false;
	foreach($question_data['answers'] as $answer_data){
		if( ($answer_data['id']==$selected_option) && $answer_data['is_correct']==1){
			$is_user_select_option=true;
		}
	}
	if($is_user_select_option){
		$question_data['user_select']=1;
	}else{
		$question_data['user_select']=0;
	}
	// $question_data['atempt_option_id']=1;
	// echo "<pre>";
	// print_r($question_data);
	$smarty->assign("question_sr",$question_num);
	$smarty->assign("option_list_array",$option_list_array);
	$smarty->assign("content_id",$content_id);
	$smarty->assign("Name","Test Prep");
	$smarty->assign("title","Review Test Prep");
	$smarty->assign("total_data",$total_length);
	$smarty->assign("test_data",$question_data);
	$smarty->assign("total_length",$total_length);
	$smarty->assign("selected_option",$selected_option);
	// display it 
	$smarty->display('../templates/review.tpl'); 
?>
