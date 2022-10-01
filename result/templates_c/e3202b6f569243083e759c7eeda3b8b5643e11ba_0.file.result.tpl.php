<?php
/* Smarty version 4.2.0, created on 2022-10-01 17:44:46
  from 'C:\xampp\htdocs\smarty_project\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63382f360ca464_14374308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3202b6f569243083e759c7eeda3b8b5643e11ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\result.tpl',
      1 => 1664626467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_63382f360ca464_14374308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-12 "> 
        <p class="fs-3 text-center " tabindex="0">uCertify Test Prep</p>
    </div>

    <div class="col-12"> 
        <p class="fs-5 text-center" tabindex="0" ><span class="text-danger fs-4" tabindex="0"> TEST MODE</span> <span class="fw-bold  fs-4" tabindex="0">ON </span><?php echo $_smarty_tpl->tpl_vars['generate_datetime']->value;?>
 IST,<span class="text-success  fs-4" tabindex="0"> TIME GIVEN</span>: 6 m 00 s</p>
    </div>

    <div class="col-12 text-center"> 
        <button class="btn btn-outline-primary" type="button" >
            <span><i class="bi bi-file-bar-graph"></i></span><span class="ps-1"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['result'];?>
%</span>
            <span class="fs-5">Result</span>
        </button>
        <button class="btn btn-outline-secondary" type="button" onclick="filterSelection('all')">
            <span ><i class="bi bi-card-text"></i></span><span class="ps-1"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['items'];?>
</span>
            <span class="fs-5">Items</span>
        </button>
        <button class="btn btn-outline-success" type="button" onclick="filterSelection('correct')">
            <span class="text-dark"><i class="bi bi-check-lg"></i></span><span class="ps-1"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['correct'];?>
</span>
            <span class="fs-5">Correct</span>
        </button>
        <button class="btn btn-outline-danger" type="button" onclick="filterSelection('wrong')">
            <span class="text-dark"><i class="bi bi-x-lg"></i></span><span class="ps-1"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['in_correct'];?>
</span>
            <span class="fs-5">Incorrect</span>
        </button>
        <button class="btn btn-outline-warning" type="button" onclick="filterSelection('un_attempt')">
            <span class="text-dark"><i class="bi bi-eye-slash"></i></span><span class="ps-1"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['unattempt'];?>
</span>
            <span class="fs-5">Unattempted</span>
        </button>
    </div>
    
    <div class="col-10 container-fluid mt-3"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover ">
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                            <?php $_smarty_tpl->_assignInScope('class', "correct");?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '0') {?>
                            <?php $_smarty_tpl->_assignInScope('class', "wrong");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('class', "un_attempt");?>
                        <?php }?>
                        <tr class="filter-question show <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" tabindex="0">
                            <td class="align-middle position-relative" tabindex="0">
                                <div class="float-start"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</div>
                            </td>
                            <td class="placeholder col-12" tabindex="0">
                                <div class=""><a href="http://localhost/smarty_project/review/index.php?item_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&content_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['content_id'];?>
&select_option=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_select_option'];?>
" class="link-dark text-decoration-none"><?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
</a></div>
                            </td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['answers'], 'item_data', false, 'key');
$_smarty_tpl->tpl_vars['item_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
$_smarty_tpl->tpl_vars['item_data']->do_else = false;
?>
                                <td scope="row" tabindex="0">
                                    <div class="d-flex justify-content-center">
                                        <?php if ($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                                        <div class="answer_bullets  user_answer"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } elseif ((($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1') && ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '0')) || (($_smarty_tpl->tpl_vars['item_data']->value['is_correct'] == '1') && ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1'))) {?>
                                            <div class="answer_bullets correct_answer "><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } elseif ((($_smarty_tpl->tpl_vars['item_data']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['user_select_option']) && $_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1')) {?>
                                            <div class="answer_bullets wrong_answer"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php } else { ?>
                                            <div class="answer_bullets"><?php echo $_smarty_tpl->tpl_vars['show_options']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</div>
                                        <?php }?>
                                    </div>
                                </td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '1') {?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-check-lg"></i>
                                </td>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['is_attempt'] == '1' && $_smarty_tpl->tpl_vars['item']->value['is_user_select_option'] == '0') {?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-x-lg">
                                </td>
                            <?php } else { ?>
                                <td scope="row" tabindex="0">
                                    <i class="bi bi-eye-slash"></i>
                                </td>
                            <?php }?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
