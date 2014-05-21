<?php /* Smarty version Smarty-3.1.18, created on 2014-05-21 10:21:07
         compiled from "templates\single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21184537c61f35bfbb5-46516964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3100e75dd45d1d61d249a8e1eb46ac5ae6c6ae2' => 
    array (
      0 => 'templates\\single.tpl',
      1 => 1400660447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21184537c61f35bfbb5-46516964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'singleDeal' => 0,
    'dealKey' => 0,
    'dealValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537c61f361f913_24574096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c61f361f913_24574096')) {function content_537c61f361f913_24574096($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dealValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dealValue']->_loop = false;
 $_smarty_tpl->tpl_vars['dealKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['singleDeal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dealValue']->key => $_smarty_tpl->tpl_vars['dealValue']->value) {
$_smarty_tpl->tpl_vars['dealValue']->_loop = true;
 $_smarty_tpl->tpl_vars['dealKey']->value = $_smarty_tpl->tpl_vars['dealValue']->key;
?>
       <?php echo $_smarty_tpl->tpl_vars['dealKey']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['dealValue']->value;?>
<br>
<?php } ?><?php }} ?>
