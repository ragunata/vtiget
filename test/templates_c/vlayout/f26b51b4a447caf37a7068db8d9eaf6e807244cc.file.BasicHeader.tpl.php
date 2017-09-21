<?php /* Smarty version Smarty-3.1.7, created on 2017-09-21 06:45:59
         compiled from "/var/www/html/vtiget/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38885101059c3602784fe61-16324975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f26b51b4a447caf37a7068db8d9eaf6e807244cc' => 
    array (
      0 => '/var/www/html/vtiget/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38885101059c3602784fe61-16324975',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c360278561c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c360278561c')) {function content_59c360278561c($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>