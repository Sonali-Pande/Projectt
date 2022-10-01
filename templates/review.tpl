{* {config_load file="test.conf" section="setup"} *}
{include file="../templates/header.tpl"}

<div class="row">
    <div class="col-12">
        <div id="listData_div" class="sidepanel height500" >
        </div>
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container-fluid" id="question_div">
                <input type="hidden" name="question_id" id="question_id" value="{$content_id}">
                <input type="hidden" id="ques_id" name="ques_id" value="{$question_sr}">
                {if $test_data.user_select== 1}
                    <center>
                        <div class="alert alert-success  w-25 mt-5 fw-bold" role="alert">
                            <span class="text-success fw-bold"><i class="bi bi-check-lg"></i></span>
                            <span class="text-success">Correct</span> 
                        </div>
                    </center>
                {else}
                    <center>
                        <div class="alert alert-danger w-25 mt-5 fw-bold" role="alert">
                            <span class="text-danger fw-bold"><i class="bi bi-x-lg"></i></span>
                            <span class="text-danger">Incorrect</span> 
                            
                        </div>
                    </center>
                {/if}
                
                <h4 class="mt-4 ">{$test_data.question}</h4>
                <table class="table">
                    <tbody>
                        {foreach $test_data.answers as $key=>$value}
                            {if ($value.id== $selected_option && $value.is_correct==1) || ($value.id!= $selected_option && $value.is_correct==1)}
                                {$class="user_answer"}
                            {elseif $value.id== $selected_option && $value.is_correct==0}
                                {$class="wrong_answer"}
                            {else}
                                {$class=""}
                            {/if}
                            <tr>
                                <th scope="row">
                                    <div class="float-start">{$option_list_array.$key}</div>
                                    <div class="form-check mx-4" tabindex="0">
                                        <input class="form-check-input {$class}" type="radio" name="select_option" id="flexRadioDefault{$key}" value=" {$value.id}" tabindex="0" disabled>
                                        <label class="form-check-label" for="flexRadioDefault{$key}">
                                        {$value.answer}
                                        </label>
                                    </div>
                                    
                                </th>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer class="mt-5">
    <div class="row">
        <div class="col-12 text-end fixed-bottom mb-5"> 
            <button type="button" class="btn btn-light border border-dark"  onclick="showListQuestion();">List</button>
            <button type="button" class="btn btn-light border border-dark" onclick="prevQuestion();">Previous</button>
            <button type="button" class="btn btn-light" id="question_srn">{$question_sr+1} To {$total_data}</button>
            <button type="button" class="btn btn-light border border-dark" onclick="nextQuestion();">Next</button>
            <button onclick="window.location.href='http://localhost/smarty_project/result/'" type="button" class="btn btn-light border border-dark">Result</button >
            <button onclick="window.location.href='http://localhost/smarty_project/'" type="button" class="btn btn-light border border-dark">Dashboard</button >
        </div>
    </div>
</footer>
<script>

    // When the User click the Question through the list Quetion 
    function switchQuestion(position){
        document.getElementById("listData_div").style.width = "";
        var sr_num=0;
        var question_position=0;
        var select_option= $("input[name=select_option]:checked").val();
        var select_value= 0;
        var quest_id= $("#question_id").val();
        if(select_option){
            select_value=select_option;
        }
        sr_num= parseInt(position)+1;
        question_position= parseInt(position)-1;
        $.ajax({
            type: "POST",
            url: "http://localhost/smarty_project/review/review.php?action=next",
            data: {
                'qust_id' : question_position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,  
            },
            // dataType: "json",
            success: function(responce){
                $("#question_div").html(responce);
                $("#question_srn").html(sr_num+' To {$total_data}');
            } 
        });  
    }

    // Next Question 
    function nextQuestion(){
        var sr_num=0;
        var position = document.getElementById("ques_id").value;
        var select_option= $("input[name=select_option]:checked").val();
        var select_value= 0;
        var quest_id= $("#question_id").val();
        sr_num= parseInt(position)+2;
        if(select_option){
            select_value=select_option;
        }
        $.ajax({
            type: "POST",
            url: "http://localhost/smarty_project/review/review.php?action=next",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            // dataType: "json",
            success: function(responce){
                if(sr_num<={$total_data}){
                    $("#question_div").html(responce);
                    $("#question_srn").html(sr_num+' To {$total_data}');
                }
            } 
        });  
    }

    // Previous Question 
    function prevQuestion(){
        var sr_num=0;
        var ques_list=0;
        var elementExists = document.getElementById("ques_id");
        if(elementExists){
            sr_num=elementExists.value;
            if(sr_num!=0){
                $("#question_srn").html(sr_num+' To {$total_data}');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/smarty_project/review/review.php?action=prev",
                    data: {
                        'qust_id' : sr_num,
                    },
                    success: function(responce){
                        $("#question_div").html(responce);
                    } 
                });  
            }
        }
    }

    // Show List Question
    function showListQuestion(){
        var question_id=0;
        var width = document. getElementById('listData_div'). style. width;
        if(width){
            document.getElementById("listData_div").style.width = "";
        }else{
            question_id=document.getElementById("ques_id").value;
            document.getElementById("listData_div").style.width = "500px";
            $.ajax({
                type: "POST",
                url: "http://localhost/smarty_project/test/question.php?action=showList",
                data: {
                    'qust_id' : question_id,
                },
                success: function(responce){
                    $('#endTestModal').modal('hide');
                    $("#listData_div").html(responce);
                } 
            }); 
        } 
    }

    //keyboard Shortcut button 
    // l or L for Show the list
</script>
{include file="../templates/footer.tpl"}