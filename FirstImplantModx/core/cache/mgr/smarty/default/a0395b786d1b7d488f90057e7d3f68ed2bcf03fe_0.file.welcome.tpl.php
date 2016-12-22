<?php /* Smarty version 3.1.27, created on 2016-11-16 21:46:18
         compiled from "G:\OpenServer\domains\ModxStart\super\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27829582ca97a8b6be3_96068936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0395b786d1b7d488f90057e7d3f68ed2bcf03fe' => 
    array (
      0 => 'G:\\OpenServer\\domains\\ModxStart\\super\\templates\\default\\welcome.tpl',
      1 => 1479321846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27829582ca97a8b6be3_96068936',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582ca97a8d2162_93365995',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582ca97a8d2162_93365995')) {
function content_582ca97a8d2162_93365995 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27829582ca97a8b6be3_96068936';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>