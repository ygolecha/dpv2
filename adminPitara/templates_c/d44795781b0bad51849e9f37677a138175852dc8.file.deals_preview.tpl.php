<?php /* Smarty version Smarty-3.1.18, created on 2014-05-14 17:51:00
         compiled from "templates\deals_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2911153732b468645c1-52027923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44795781b0bad51849e9f37677a138175852dc8' => 
    array (
      0 => 'templates\\deals_preview.tpl',
      1 => 1400067161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2911153732b468645c1-52027923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53732b468d1f03_10473602',
  'variables' => 
  array (
    'dealValue' => 0,
    'deal_key' => 0,
    'deal_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53732b468d1f03_10473602')) {function content_53732b468d1f03_10473602($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['deal_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['deal_value']->_loop = false;
 $_smarty_tpl->tpl_vars['deal_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dealValue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['deal_value']->key => $_smarty_tpl->tpl_vars['deal_value']->value) {
$_smarty_tpl->tpl_vars['deal_value']->_loop = true;
 $_smarty_tpl->tpl_vars['deal_key']->value = $_smarty_tpl->tpl_vars['deal_value']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['deal_key']->value;?>
-------<?php echo $_smarty_tpl->tpl_vars['deal_value']->value;?>
 <br>
<?php } ?><?php }} ?>
