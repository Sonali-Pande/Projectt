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
	$question = [];
	$display_data = [];
	$total_length= count($json_data);
	$user_history=$_SESSION['user_history'];
	$attempt_question= count($_SESSION['user_history']);
	$unattempt_question= $total_length - $attempt_question;
	$counter=1;
	$total_correct=0;
	$total_unattempt=0;
	
	//fetch the Question Answer and options into json files
	foreach($json_data as $data){
		$get_all_questioon = json_decode($data['content_text'],true);
		$get_all_questioon['content_id'] = $data['content_id'];
		$question[]=$get_all_questioon;
	}
	
	foreach($question as $key=> $question_data){
		$is_user_select_option=false;
		$is_attempt=false;
		$arr['id']=$counter;
		$content_id = $question_data['content_id'];
		$arr['content_id']= $content_id;
		$arr['question']=$question_data['question'];
		$arr['user_select_option']=0;
		foreach($user_history as $value){
			if(isset($value[$content_id])){
				foreach($question_data['answers']as $answer_data){
					if( ($answer_data['id']==$value[$content_id]['select_option']) && ($answer_data['is_correct']==1) ){
						$is_user_select_option=true;
					}else{
						$is_attempt=true;
					}
				}
				$arr['user_select_option']=$value[$content_id]['select_option'];
			}
		}
		if($is_user_select_option){
			$total_correct++;
			$arr['is_user_select_option']=1;
		}else{
			$arr['is_user_select_option']=0;
		}

		if($is_attempt){
			$arr['is_attempt']=1;
		}else{
			$total_unattempt++;
			$arr['is_attempt']=0;
		}

		$arr['answers']=$question_data['answers'];
		$display_data[]= $arr;
		$counter++;
	}

	// echo  "<pre>";
	// print_r($display_data);
	$calculate_percent= round( ((100/$total_length)*$total_correct));
	$user_data['result']=$calculate_percent;
	$user_data['items']=$total_length;
	$user_data['correct']=$total_correct;
	$user_data['in_correct']= ( $total_length - ($total_unattempt+$total_correct));
	$user_data['unattempt']=$total_unattempt;
	$show_options= array("A","B","C","D");
	$generate_datetime= date("d-M-y H:i:sa");
	$smarty->assign("title","ucertify Result");
	$smarty->assign("generate_datetime",$generate_datetime);
	$smarty->assign("Name","Test Prep");
	$smarty->assign("class","demo");
	$smarty->assign("display_data",$display_data);
	$smarty->assign("user_data",$user_data);
	$smarty->assign("show_options",$show_options);
	// display it 
	$smarty->display('../templates/result.tpl'); 
?>
