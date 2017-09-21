<?php /* Smarty version Smarty-3.1.7, created on 2017-09-21 06:45:52
         compiled from "/var/www/html/vtiget/includes/runtime/../../layouts/vlayout/modules/Users/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123435049659c36020a01d79-34742809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdd4d590cbca3bdbfac897a5ec7587f0716b1e05' => 
    array (
      0 => '/var/www/html/vtiget/includes/runtime/../../layouts/vlayout/modules/Users/Login.tpl',
      1 => 1413779082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123435049659c36020a01d79-34742809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_CustomLoginTemplateFullPath' => 0,
    '_CustomLoginTemplate' => 0,
    '_DefaultLoginTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c36020a3621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c36020a3621')) {function content_59c36020a3621($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["_DefaultLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Default.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Custom.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplateFullPath"] = new Smarty_variable("layouts/vlayout/".($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value), null, 0);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>