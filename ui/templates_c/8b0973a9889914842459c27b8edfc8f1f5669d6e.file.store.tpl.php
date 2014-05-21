<?php /* Smarty version Smarty-3.1.18, created on 2014-05-21 10:15:31
         compiled from "templates\store.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3139537c60a39aa0e5-31996830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0973a9889914842459c27b8edfc8f1f5669d6e' => 
    array (
      0 => 'templates\\store.tpl',
      1 => 1400660102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3139537c60a39aa0e5-31996830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storeData' => 0,
    'storeDetails' => 0,
    'storeKey' => 0,
    'storeValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537c60a3a14888_72982147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c60a3a14888_72982147')) {function content_537c60a3a14888_72982147($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['storeDetails'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storeDetails']->_loop = false;
 $_smarty_tpl->tpl_vars['storeNo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['storeData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storeDetails']->key => $_smarty_tpl->tpl_vars['storeDetails']->value) {
$_smarty_tpl->tpl_vars['storeDetails']->_loop = true;
 $_smarty_tpl->tpl_vars['storeNo']->value = $_smarty_tpl->tpl_vars['storeDetails']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['storeValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storeValue']->_loop = false;
 $_smarty_tpl->tpl_vars['storeKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['storeDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storeValue']->key => $_smarty_tpl->tpl_vars['storeValue']->value) {
$_smarty_tpl->tpl_vars['storeValue']->_loop = true;
 $_smarty_tpl->tpl_vars['storeKey']->value = $_smarty_tpl->tpl_vars['storeValue']->key;
?>
       <?php echo $_smarty_tpl->tpl_vars['storeKey']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['storeValue']->value;?>
<br>
    <?php } ?>
    <hr>
<?php } ?><?php }} ?>
