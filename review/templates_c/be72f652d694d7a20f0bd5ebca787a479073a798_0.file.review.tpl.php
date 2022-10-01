<?php
/* Smarty version 4.2.0, created on 2022-10-01 17:44:53
  from 'C:\xampp\htdocs\smarty_project\templates\review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63382f3da94183_72264820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be72f652d694d7a20f0bd5ebca787a479073a798' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\review.tpl',
      1 => 1664625084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_63382f3da94183_72264820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-12">
        <div id="listData_div" class="sidepanel height500" >
        </div>
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container-fluid" id="question_div">
                <input type="hidden" name="question_id" id="question_id" value="<?php echo $_smarty_tpl->tpl_vars['content_id']->value;?>
">
                <input type="hidden" id="ques_id" name="ques_id" value="<?php echo $_smarty_tpl->tpl_vars['question_sr']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['test_data']->value['user_select'] == 1) {?>
                    <center>
                        <div class="alert alert-success  w-25 mt-5 fw-bold" role="alert">
                            <span class="text-success fw-bold"><i class="bi bi-check-lg"></i></span>
                            <span class="text-success">Correct</span> 
                        </div>
                    </center>
                <?php } else { ?>
                    <center>
                        <div class="alert alert-danger w-25 mt-5 fw-bold" role="alert">
                            <span class="text-danger fw-bold"><i class="bi bi-x-lg"></i></span>
                            <span class="text-danger">Incorrect</span> 
                            
                        </div>
                    </center>
                <?php }?>
                
                <h4 class="mt-4 "><?php echo $_smarty_tpl->tpl_vars['test_data']->value['question'];?>
</h4>
                <table class="table">
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test_data']->value['answers'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['selected_option']->value && $_smarty_tpl->tpl_vars['value']->value['is_correct'] == 1) || ($_smarty_tpl->tpl_vars['value']->value['id'] != $_smarty_tpl->tpl_vars['selected_option']->value && $_smarty_tpl->tpl_vars['value']->value['is_correct'] == 1)) {?>
                                <?php $_smarty_tpl->_assignInScope('class', "user_answer");?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['id'] == $_smarty_tpl->tpl_vars['selected_option']->value && $_smarty_tpl->tpl_vars['value']->value['is_correct'] == 0) {?>
                                <?php $_smarty_tpl->_assignInScope('class', "wrong_answer");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('class', '');?>
                            <?php }?>
                            <tr>
                                <th scope="row">
                                    <div class="float-start"><?php echo $_smarty_tpl->tpl_vars['option_list_array']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                    <div class="form-check mx-4" tabindex="0">
                                        <input class="form-check-input <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" type="radio" name="select_option" id="flexRadioDefault<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value=" <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" tabindex="0" disabled>
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

<footer class="mt-5">
    <div class="row">
        <div class="col-12 text-end fixed-bottom mb-5"> 
            <button type="button" class="btn btn-light border border-dark"  onclick="showListQuestion();">List</button>
            <button type="button" class="btn btn-light border border-dark" onclick="prevQuestion();">Previous</button>
            <button type="button" class="btn btn-light" id="question_srn"><?php echo $_smarty_tpl->tpl_vars['question_sr']->value+1;?>
 To <?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
</button>
            <button type="button" class="btn btn-light border border-dark" onclick="nextQuestion();">Next</button>
            <button onclick="window.location.href='http://localhost/smarty_project/result/'" type="button" class="btn btn-light border border-dark">Result</button >
            <button onclick="window.location.href='http://localhost/smarty_project/'" type="button" class="btn btn-light border border-dark">Dashboard</button >
        </div>
    </div>
</footer>
<?php echo '<script'; ?>
>

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
            url: "http://localhost/smarty_project/review/review.php?action=next",
            data: {
                'qust_id' : position,
                'select_option'  :   select_value,
                'content_id'  :   quest_id,
            },
            // dataType: "json",
            success: function(responce){
                if(sr_num<=<?php echo $_smarty_tpl->tpl_vars['total_data']->value;?>
){
                    $("#question_div").html(responce);
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
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
