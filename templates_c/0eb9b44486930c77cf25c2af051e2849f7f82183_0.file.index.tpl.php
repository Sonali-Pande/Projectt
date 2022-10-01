<?php
/* Smarty version 4.2.0, created on 2022-09-26 16:14:38
  from 'C:\xampp\htdocs\uctest\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6331b3ce931f44_89874863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb9b44486930c77cf25c2af051e2849f7f82183' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uctest\\templates\\index.tpl',
      1 => 1664201670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6331b3ce931f44_89874863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Ucertify"), 0, false);
?>

<div class="row mt-5">
    <div class="col-12 text-center">
        
    </div>
    <div class="col-12 text-center fixed-bottom mb-5">
        <button type="button" class="btn btn-light" onclick="window.location.href='http://localhost/uctest/test/';">Start Test</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
