<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 06:52:04
         compiled from "/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13498073759bf6d142f9542-99240402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e51b4ec69a6ab8d346118b42e119789ec3d57d6' => 
    array (
      0 => '/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/StringDetailView.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13498073759bf6d142f9542-99240402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bf6d14300e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf6d14300e5')) {function content_59bf6d14300e5($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>