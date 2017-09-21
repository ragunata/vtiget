<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 10:25:15
         compiled from "/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96254087159bf9f0b5dfd46-24674119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4adef7ca83346c2da8271cf6c2c19afb702dab3d' => 
    array (
      0 => '/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96254087159bf9f0b5dfd46-24674119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bf9f0b5e892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf9f0b5e892')) {function content_59bf9f0b5e892($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>