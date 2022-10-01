<?php
/* Smarty version 4.2.0, created on 2022-08-10 09:54:43
  from 'C:\xampp\htdocs\smarty_test\templates\practice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f3644364edd8_85761748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219cde077be40404bd2da75d5bf31c518ac7ece5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_test\\templates\\practice.tpl',
      1 => 1660118079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f3644364edd8_85761748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty_test\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<h3>Ans 1</h3>
<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>


<h3>Ans 2</h3>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['paragraph1']->value,'effective','efficient');?>
<br>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['paragraph1']->value);?>


<h3>Ans 3</h3>
<?php echo smarty_function_html_options(array('name'=>"id",'options'=>$_smarty_tpl->tpl_vars['option_user']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_option_user']->value),$_smarty_tpl);?>
</br>
<?php echo smarty_function_html_radios(array('name'=>"id",'options'=>$_smarty_tpl->tpl_vars['cust_radio']->value,'selected'=>$_smarty_tpl->tpl_vars['cust_id']->value,'separator'=>'</br>'),$_smarty_tpl);?>



<h3>Ans 4</h3>
<?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['num_array']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_start = $__section_foo_0_loop - 1;
$__section_foo_0_total = min(($__section_foo_0_start+ 1), $__section_foo_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = $__section_foo_0_start; $__section_foo_0_iteration <= $__section_foo_0_total; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] -= 1){
?>
    <?php echo $_smarty_tpl->tpl_vars['num_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null)];?>
</br>
<?php
}
}
?>

<h3>Ans 5</h3>
<?php echo smarty_function_math(array('equation'=>"a * b",'a'=>$_smarty_tpl->tpl_vars['num1']->value,'b'=>$_smarty_tpl->tpl_vars['num2']->value),$_smarty_tpl);?>


<h3>Ans 6</h3>
<table border="2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_ids']->value, 'email_data');
$_smarty_tpl->tpl_vars['email_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_data']->value) {
$_smarty_tpl->tpl_vars['email_data']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <tr>

                <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>

            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<h3>Ans 7</h3>
<b>Total Character : <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['para_sentence']->value, $tmp);?>
<b></br>
<b>Total Paragraph : <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['para_sentence']->value, $tmp)+1);?>
<b></br>
<b>Total Sentences : <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['para_sentence']->value, $tmp);?>
<b></br>
<b>Total Words : <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['para_sentence']->value, $tmp);?>
<b></br>

<h3>Ans 8</h3>
<b><?php echo $_smarty_tpl->tpl_vars['send_number']->value;?>
</b><br>
<?php if (!(1 & $_smarty_tpl->tpl_vars['send_number']->value)) {?>
    <b>open Even Files</b>
<?php } else { ?>
    <b>open Odd Files</b>
<?php }?>
<h3>Ans 9</h3>
<?php echo ($_smarty_tpl->tpl_vars['cat_example']->value).(' Ucertify');?>


<h3>Ans 10</h3>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['paragraph1']->value);?>
<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['paragraph1']->value,30);?>
<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['paragraph1']->value,30,'');?>
<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['paragraph1']->value,30,'',true);?>
<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['paragraph1']->value,30,"........",true);?>
<br>
<?php }
}
