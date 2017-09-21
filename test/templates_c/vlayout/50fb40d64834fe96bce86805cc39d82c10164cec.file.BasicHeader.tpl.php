<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 04:44:55
         compiled from "/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95197378159bf4f47baac46-88163067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50fb40d64834fe96bce86805cc39d82c10164cec' => 
    array (
      0 => '/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95197378159bf4f47baac46-88163067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bf4f47bb5cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf4f47bb5cb')) {function content_59bf4f47bb5cb($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>