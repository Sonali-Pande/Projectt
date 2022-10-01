<?php
/* Smarty version 4.2.0, created on 2022-08-23 10:24:46
  from 'C:\xampp\htdocs\uctest\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63048ece832be7_04064806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210ffcbf8ab5c9c1f4b5c2337f70f083823e51ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\test.tpl',
      1 => 1661240990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_63048ece832be7_04064806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-12">
        <div id="listData_div" class="sidepanel height500">
        </div>
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container-fluid" id="question_div">
                <input type="hidden" name="question_id" id="question_id" value="<?php echo $_smarty_tpl->tpl_vars['content_id']->value;?>
">
                <input type="hidden" id="ques_id" name="ques_id" value="<?php echo $_smarty_tpl->tpl_vars['question_sr']->value;?>
">
                <h4 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['test_data']->value['question'];?>
</h1>
                <table class="table">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test_data']->value['answers'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['selected_options']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('is_select_option', "checked");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('is_select_option', '');?>
                            <?php }?>
                            <tr>
                                <th scope="row">
                                    <div class="float-start"><?php echo $_smarty_tpl->tpl_vars['option_list_array']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                    <div class="form-check mx-4" tabindex="0">
                                        <input class="form-check-input" type="radio" name="select_option" id="flexRadioDefault<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value=" <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" tabindex="0" <?php echo $_smarty_tpl->tpl_vars['is_select_option']->value;?>
>
                                        <label class="form-check-label" for="flexRadioDefault<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['answer'];?>

                                        </label>
                                    </div>
                                    
                                </th>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer class="mt-5 ">
    <div class="row">
        <div class="col-12 text-end fixed-bottom mb-5 "> 
            <button class="btn btn-light" type="button">
                <span id="time"></span>
            </button>
            <button type="button" class="btn btn-light border border-dark"  onclick="showListQuestion();">List</button>
            <button type="button" class="btn btn-light border border-dark" onclick="prevQuestion();">Previous</button>
            <button type="button" class="btn btn-light" id="question_srn"><?php echo $_smarty_tpl->tpl_vars['question_sr']->value+1;?>
 To <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
</button>
            <button type="button" class="btn btn-light border border-dark" onclick="nextQuestion();">Next</button>
            <button onclick="FinishedTest()" type="button" class="btn btn-light border border-dark">End Test</button >
        </div>
    </div>
</footer>
<?php echo '<script'; ?>
>
    // Set the date we're counting down to
    const add_minutes = 1090 * 800;
    var countDownDate = new Date().getTime()+add_minutes;
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();
    
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
    
        // Time calculations for  hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var calculate_hours= hours;
        var calculate_minutes= minutes;
        var calculate_second= seconds;
        if(hours<=9){
            calculate_hours= "0"+hours;
        }
        if(minutes<=9){
            calculate_minutes= "0"+minutes;
        }
        if(seconds<=9){
            calculate_second= "0"+seconds;
        }
        // alert(seconds)
        // Output the result in an element with id="demo"
        document.getElementById("time").innerHTML = calculate_hours + ":"
        + calculate_minutes + ":" + calculate_second;
        
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "00:00:00";
            generateResult();
        }
    }, 1000);

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
            url: "http://localhost/uctest/test/question.php?action=next",
            data: {
                'qust_id' : question_position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            // dataType: "json",
            success: function(responce){
                $("#question_div").html(responce);
                $("#question_srn").html(sr_num+' To <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
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
            url: "http://localhost/uctest/test/question.php?action=next",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            // dataType: "json",
            success: function(responce){
                $("#question_div").html(responce);
                if(end_test.value==1){
                    $("#attempt_div").html($("#attempt_quest").val());
                    $("#unattempt_div").html($("#un_atempt_quest").val());
                    endTest();
                }else{
                    $("#question_srn").html(sr_num+' To <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
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
                $("#question_srn").html(sr_num+' To <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/uctest/test/question.php?action=prev",
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

    //End test modal Show 
    function endTest(){
        $('#endTestModal').modal('show');
    }

    // When the user click the End test Button
    function FinishedTest(){
        var position = document.getElementById("ques_id").value;
        var select_value= 0;
        var select_option= $("input[name=select_option]:checked").val();
        if(select_option){
            select_value=select_option;
        }
        var quest_id= $("#question_id").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/uctest/test/question.php?action=finishedTest",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            dataType: "json",
            success: function(responce){
                $("#attempt_div").html(responce.attempt_question);
                $("#unattempt_div").html(responce.unattempt_question);
                $('#endTestModal').modal('show');
            } 
        });  
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
                url: "http://localhost/uctest/test/question.php?action=showList",
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

    //Generate the Result
    function generateResult(){
        window.location.href='http://localhost/uctest/result/';
    }

    //keyboard Shortcut button 
    // l or L for Show the list option
    // p or P for Previous Question
    // n or N for Next Question
     // d or d for End Test
    document.onkeypress = function (e) {
        e = e || window.event;
        if( (e.key=="l") || (e.key=="L") ){
            showListQuestion();
        }
        if( (e.key=="p") || (e.key=="P") ){
            prevQuestion();
        }
        if( (e.key=="n") || (e.key=="N") ){
            nextQuestion();
        }
        if( (e.key=="d") || (e.key=="D") ){
            FinishedTest();
        }
    };
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
