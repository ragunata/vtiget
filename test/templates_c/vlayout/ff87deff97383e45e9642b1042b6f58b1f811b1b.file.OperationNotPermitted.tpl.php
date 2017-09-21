<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 05:22:42
         compiled from "/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/OperationNotPermitted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142619819559bf582283a693-52668904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff87deff97383e45e9642b1042b6f58b1f811b1b' => 
    array (
      0 => '/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/OperationNotPermitted.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142619819559bf582283a693-52668904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bf582284080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf582284080')) {function content_59bf582284080($_smarty_tpl) {?>
<div style="margin:0 auto;width: 50em;">
	<table border='0' cellpadding='5' cellspacing='0' height='600px' width="700px">
	<tr><td align='center'>
		<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 80%; position: relative; z-index: 100000020;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tr>
			<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
			<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
				<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
		</tr>
		<tr>
			<td class='small' align='right' nowrap='nowrap'>
				<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
			</td>
		</tr>
		</table>
		</div>
	</td></tr>
	</table>
</div><?php }} ?>