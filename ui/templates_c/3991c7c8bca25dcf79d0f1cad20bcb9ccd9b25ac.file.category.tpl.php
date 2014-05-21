<?php /* Smarty version Smarty-3.1.18, created on 2014-05-21 07:45:42
         compiled from "templates\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090537c3d86c10fb1-97103566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3991c7c8bca25dcf79d0f1cad20bcb9ccd9b25ac' => 
    array (
      0 => 'templates\\category.tpl',
      1 => 1400651138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090537c3d86c10fb1-97103566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'catData' => 0,
    'catDetails' => 0,
    'catKey' => 0,
    'catValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537c3d86c7ee30_35839398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c3d86c7ee30_35839398')) {function content_537c3d86c7ee30_35839398($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['catDetails'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catDetails']->_loop = false;
 $_smarty_tpl->tpl_vars['catNo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catDetails']->key => $_smarty_tpl->tpl_vars['catDetails']->value) {
$_smarty_tpl->tpl_vars['catDetails']->_loop = true;
 $_smarty_tpl->tpl_vars['catNo']->value = $_smarty_tpl->tpl_vars['catDetails']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['catValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catValue']->_loop = false;
 $_smarty_tpl->tpl_vars['catKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catValue']->key => $_smarty_tpl->tpl_vars['catValue']->value) {
$_smarty_tpl->tpl_vars['catValue']->_loop = true;
 $_smarty_tpl->tpl_vars['catKey']->value = $_smarty_tpl->tpl_vars['catValue']->key;
?>
       <?php echo $_smarty_tpl->tpl_vars['catKey']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['catValue']->value;?>
<br>
    <?php } ?>
    <hr>
<?php } ?><?php }} ?>
