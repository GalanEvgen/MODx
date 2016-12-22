<?php /* Smarty version 3.1.27, created on 2016-11-17 00:13:19
         compiled from "G:\OpenServer\domains\ModxStart\super\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1738582ccbefeead90_31385938%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9fae2b167944e8d4cfdb619f5c18dd2780ac0f' => 
    array (
      0 => 'G:\\OpenServer\\domains\\ModxStart\\super\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1479321843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1738582ccbefeead90_31385938',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582ccbeff024a6_01754651',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582ccbeff024a6_01754651')) {
function content_582ccbeff024a6_01754651 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1738582ccbefeead90_31385938';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>