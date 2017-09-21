<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 06:52:05
         compiled from "/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140308017759bf6d15c274e1-16568596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3276209fb1b9e3652ec446d90ae3cc8af6f09b29' => 
    array (
      0 => '/var/www/html/ptpk/includes/runtime/../../layouts/vlayout/modules/Vtiger/ModalFooter.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140308017759bf6d15c274e1-16568596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bf6d15c2dfb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf6d15c2dfb')) {function content_59bf6d15c2dfb($_smarty_tpl) {?>
<div class="modal-footer"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }} ?>