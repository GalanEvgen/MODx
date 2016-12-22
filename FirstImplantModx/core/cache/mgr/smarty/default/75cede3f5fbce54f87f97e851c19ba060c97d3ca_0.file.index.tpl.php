<?php /* Smarty version 3.1.27, created on 2016-11-16 22:03:47
         compiled from "G:\OpenServer\domains\ModxStart\super\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29366582cad93bef017_62418382%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75cede3f5fbce54f87f97e851c19ba060c97d3ca' => 
    array (
      0 => 'G:\\OpenServer\\domains\\ModxStart\\super\\templates\\default\\workspaces\\index.tpl',
      1 => 1479321846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29366582cad93bef017_62418382',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582cad93c50ab4_04863177',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582cad93c50ab4_04863177')) {
function content_582cad93c50ab4_04863177 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29366582cad93bef017_62418382';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>