<?php
/* Smarty version 4.2.0, created on 2022-08-09 07:28:13
  from 'C:\xampp\htdocs\smarty\templates\practice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_62f1f06dbf8d60_03896590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04b43320f65849ca4690960b265ab7aad0eefff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\practice.tpl',
      1 => 1660022892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f1f06dbf8d60_03896590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\templates_c\\localhost^b04b43320f65849ca4690960b265ab7aad0eefff_0.file.practice.tpl.php',
    'uid' => 'b04b43320f65849ca4690960b265ab7aad0eefff',
    'call_name' => 'smarty_template_function_menu_184201423662f1f06da9e828_74633165',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),9=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),10=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
 Total Length </b>
<br>
<b>Count Character:- (<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['name']->value, $tmp);?>
)</b>
<b>Paragraph Count:- (<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['name']->value, $tmp)+1);?>
)</b>
<br>
<b>Word Wrap <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['articleTitle']->value,30,"\n",false);?>
</b>
<br>
<b>unescape <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES);?>
</b>
<br>
<?php $_smarty_tpl->_assignInScope('arraElem', array(1,2,3));?>
<b>Array Element of First Index :- <?php echo $_smarty_tpl->tpl_vars['arraElem']->value[0];?>
</b>
<br>
<b>Count Functions</b><br />
<?php echo smarty_function_counter(array('start'=>1,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

<b>Cycle Functions</b><br />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'table');
$_smarty_tpl->tpl_vars['table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->do_else = false;
?>
    <?php echo smarty_function_cycle(array('values'=>'','reset'=>true,'print'=>false),$_smarty_tpl);?>

    <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
            <td>
                <?php echo $_smarty_tpl->tpl_vars['row']->value;?>

                </td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>
<?php $_smarty_tpl->_assignInScope('name', 'Bob');?>

The value of $name is <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.<br>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>hello<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>I say just <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>world<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>


<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>
  
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>


<div id="html_elements">
    <h3>Html Elements  </h3>
    <h5>Checkbox</h5>
    <?php echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


    <h5>Radiobox</h5>
    <?php echo smarty_function_html_radios(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


    <h5>select options</h5>
    <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value),$_smarty_tpl);?>


    <h5>Image</h5>
    <?php echo smarty_function_html_image(array('file'=>'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80'),$_smarty_tpl);?>


    <h5>Select Date</h5>
    <?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>
</br>

            <h5>Select Time 24(Hrs)</h5>
    <?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>


    <h5>Table</h5>
    <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['myColors']->value),$_smarty_tpl);?>

</div>


<div>
    <h5>Branching Statement</h5>
    <b>For Loop</b></br>
    <ul>
    <?php
$_smarty_tpl->tpl_vars['foo_loop'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_loop']->step = 1;$_smarty_tpl->tpl_vars['foo_loop']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_loop']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo_loop']->step));
if ($_smarty_tpl->tpl_vars['foo_loop']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_loop']->value = 1, $_smarty_tpl->tpl_vars['foo_loop']->iteration = 1;$_smarty_tpl->tpl_vars['foo_loop']->iteration <= $_smarty_tpl->tpl_vars['foo_loop']->total;$_smarty_tpl->tpl_vars['foo_loop']->value += $_smarty_tpl->tpl_vars['foo_loop']->step, $_smarty_tpl->tpl_vars['foo_loop']->iteration++) {
$_smarty_tpl->tpl_vars['foo_loop']->first = $_smarty_tpl->tpl_vars['foo_loop']->iteration === 1;$_smarty_tpl->tpl_vars['foo_loop']->last = $_smarty_tpl->tpl_vars['foo_loop']->iteration === $_smarty_tpl->tpl_vars['foo_loop']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['foo_loop']->value;?>
</li>
    <?php }
}
?>
    </ul>

    <b>Foreach Loop</b></br>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_5_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'name', true);
$_smarty_tpl->tpl_vars['name']->show = ($_smarty_tpl->tpl_vars['name']->total > 0);
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$__foreach_name_6_saved = $_smarty_tpl->tpl_vars['name'];
?>
        <?php if (!(1 & $_smarty_tpl->tpl_vars['name']->iteration / 3)) {?>
            <span style="color: #000"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
        <?php } else { ?>
            <span style="color: #eee"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_7_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
            <tr>
            <th>key</td>
            <th>name</td>
            </tr>
        <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
     
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'name', true);
$_smarty_tpl->tpl_vars['name']->show = ($_smarty_tpl->tpl_vars['name']->total > 0);
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$__foreach_name_8_saved = $_smarty_tpl->tpl_vars['name'];
?>
        <li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
    <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['name']->show) {?> do something here if the array contained data <?php }?>
    <br/>

    </br>
    <b>Break Statement</b></br>
    <?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_9_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
                <?php break 1;?>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </br>
    <b>Continue Statement</b></br>
    <?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
$_smarty_tpl->tpl_vars['value']->index = -1;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_10_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
                <?php continue 1;?>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </br>
    <?php $_smarty_tpl->_assignInScope('count', 0);?>
    <b>While Loop</b></br>
    <?php
 while ($_smarty_tpl->tpl_vars['count']->value <= 10) {?>
        <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
            <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</br>
        <?php }?>
       
        <?php echo $_smarty_tpl->tpl_vars['count']->value++;?>

    <?php }?>

</div>








<h5>Smart Const Variable</h5>
<?php echo (defined('MY_CONST_VAL') ? constant('MY_CONST_VAL') : null);?>

<h5>Smart Reserved Variable</h5>
<div id="footer">Powered by Smarty <?php echo Smarty::SMARTY_VERSION;?>
</div>
<div id="footer">current DIR <?php echo dirname($_smarty_tpl->source->filepath);?>
</div>
<h5>Section</h5>
<?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
    <?php
$__section_customer_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_1_total = $__section_customer_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_1_total !== 0) {
for ($__section_customer_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_1_iteration <= $__section_customer_1_total; $__section_customer_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>       id: <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
<br />
    <?php
}
}
?>
    <hr />
        <?php
$__section_foo_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_2_start = $__section_foo_2_loop - 1;
$__section_foo_2_total = min(($__section_foo_2_start+ 1), $__section_foo_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_2_total !== 0) {
for ($__section_foo_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = $__section_foo_2_start; $__section_foo_2_iteration <= $__section_foo_2_total; $__section_foo_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] -= 1){
?>
        <?php
$__section_foo_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_3_start = $__section_foo_3_loop - 1;
$__section_foo_3_total = min(($__section_foo_3_start+ 1), $__section_foo_3_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_3_total !== 0) {
for ($__section_foo_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = $__section_foo_3_start; $__section_foo_3_iteration <= $__section_foo_3_total; $__section_foo_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] -= 1){
?>         <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null)];?>
<br />
        <?php
}
}
?>
    <?php
}
}
}
}
?>
<h5>Obfuscating E-mail Addresses</h5>
<div id="contact">Send inquiries to
<?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['EmailAddress']->value,'encode'=>'javascript','subject'=>'Hello'),$_smarty_tpl);?>

</div>
<h5>Blank Variable Handling</h5>
<?php if ($_smarty_tpl->tpl_vars['title']->value == '') {?>
    &nbsp;
 <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

 <?php }?>
 
  <?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'Default Value' ?? null : $tmp);?>



<?php }
/* smarty_template_function_menu_184201423662f1f06da9e828_74633165 */
if (!function_exists('smarty_template_function_menu_184201423662f1f06da9e828_74633165')) {
function smarty_template_function_menu_184201423662f1f06da9e828_74633165(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_3_saved = $_smarty_tpl->tpl_vars['entry'];
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

        <?php } else { ?>
        <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}}
/*/ smarty_template_function_menu_184201423662f1f06da9e828_74633165 */
}
