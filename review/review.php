<?php
	session_start();
	$json_files_data = file_get_contents('../question.json');
	$json_data = json_decode($json_files_data, true);
	$_SESSION['total_length']=  count($json_data);
	// Fetch The Next Question
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="next"){
		NextQuestion();
	}

	// Fetch The Previous Question
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="prev"){
		previousQuestion();
	}

	// Display The All Question in List Data
	if( isset($_REQUEST['action']) && $_REQUEST['action']=="showList"){
		ShowListQuestion($_POST['qust_id']);
	}

	//get the next Question
	function NextQuestion(){
		$question_num= $_POST['qust_id']+1;
		$total_length= count($GLOBALS['json_data']);
		$data=array(
			"content_id"=>$_POST['content_id'],
			"selected_option"=>$_POST['select_option']
		);
		$get_user_data= $_SESSION['user_history'];
		if($question_num<$total_length){
			$question_content_id= $GLOBALS['json_data'][$question_num]['content_id'];
			$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,$selected_options);
			echo $get_data;
		}
		if( (($question_num)==$total_length)){
			$question_content_id= $GLOBALS['json_data'][$_POST['qust_id']]['content_id'];
			$question_num= $_POST['qust_id'];
			$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,$selected_options);
			echo $get_data;
		}
	}

	//get the Previous Question
	function previousQuestion(){
		$question_num= $_POST['qust_id']-1;
		$total_length= count($GLOBALS['json_data']);
		$question_content_id= $GLOBALS['json_data'][$question_num]['content_id'];
		$get_user_data= $_SESSION['user_history'];
		$selected_options = fetch_user_select_option($get_user_data,$question_content_id);
		if($question_num<$total_length){
			$question_data = json_decode($GLOBALS['json_data'][$question_num]['content_text'], true); 
			$get_data=getQuestion($question_content_id,$question_data,$question_num,$selected_options);
			echo $get_data;
		}
	}

	// show the list Question 
	function ShowListQuestion($quest_id){
		if(!empty($GLOBALS['json_data'])){
			$output="";
			$class="";
			$id=0;
			$sr=1;
			foreach($GLOBALS['json_data'] as $data){
				if($id==$quest_id){
					$class="active";
				}else{
					$class="";
				}
				$get_all_questioon = json_decode($data['content_text'],true);
				$output.='<div class="question d-flex"><div class="float-left square mt-2">'.$sr.'</div><a class="'.$class.' list-group-item-action list-group-item-light text-truncate fs-6" href="javascript:switchQuestion('.$id.')">'.$get_all_questioon['question'].'</a></div>';
				$id++;
				$sr++;
			}
			echo $output;
		}
	}

	//get The Previous or Next Question
	function getQuestion($content_id,$question_details,$counter,$select_option=0){
		$option_counter=0;	//It is used to access the option list
		$attempt_question=0;	//It is used to calculate the attempt question
		$unattempt_question=0;	//It is used to calculate the unattempt question
		$option_list_array= array("A","B","C","D");
		$is_user_wrong_answer=false;	//check the use selection answer
		$user_select_question_status="";
		$check_options="";	//empty variable that concate the option result
		//check the user selection is right or wrong
		foreach($question_details['answers'] as $question_data){
			if($question_data['id']== $select_option && $question_data['is_correct']==1){
				$is_user_wrong_answer=true;
			}
			if( ($question_data['id']== $select_option && $question_data['is_correct']==1) || ($question_data['id']!= $select_option && $question_data['is_correct']==1) ){
				$classs="user_answer";
			}else if($question_data['id']== $select_option && $question_data['is_correct']==0){
				$classs="wrong_answer";
			}else{
				$classs="";
			}
			$check_options.='<tr>
						<th scope="row">
							<div class="float-start">'.$option_list_array[$option_counter].'</div>
							<div class="form-check mx-4" tabindex="0">
								<input class="form-check-input '.$classs.'" type="radio" name="select_option" id="flexRadioDefault'.$option_counter.'" value="'.$question_data['id'].'" tabindex="0" disabled>
								<label class="form-check-label" for="flexRadioDefault'.$option_counter.'">
								'.$question_data['answer'].'
								</label>
							</div>
						</th>
					</tr>';
					$option_counter++;
		}
		//it Show the top on table the user select question is right or wrong
		if($is_user_wrong_answer){
			$user_select_question_status='<center>
											<div class="alert alert-success  w-25 mt-5 fw-bold" role="alert">
												<span class="text-success fw-bold"><i class="bi bi-check-lg"></i></span>
												<span class="text-success">Correct</span> 
											</div>
										</center>';
		}else{
			$user_select_question_status=' <center>
												<div class="alert alert-danger w-25 mt-5 fw-bold" role="alert">
													<span class="text-danger fw-bold"><i class="bi bi-x-lg"></i></span>
													<span class="text-danger">Incorrect</span> 
													
												</div>
											</center>';
		}
		$output='<input type="hidden" id="ques_id" name="ques_id" value="'.$counter.'">
		<input type="hidden" id="question_id" name="question_id" value="'.$content_id.'">
		<input type="hidden" id="attempt_quest" name="attempt_quest" value="'.$attempt_question.'">
		<input type="hidden" id="un_atempt_quest" name="un_atempt_quest" value="'.$unattempt_question.'">'.$user_select_question_status.'
		<h4 class="mt-4">'.$question_details['question'].'</h1>
		<table class="table">
			<tbody>'.$check_options;
			
			$output.='</tbody>
		</table>';
		return $output;
	}

	//get The User Select the Option
	function fetch_user_select_option($user_data,$question_content_id){
		$selected_options=0;
		foreach ($user_data as $key) {
			foreach($key as $data_key){
				if($data_key['content_id']==$question_content_id){
					$selected_options= $data_key['select_option'];
					break;
				}
			}
		}
		return $selected_options;
	}
?>
