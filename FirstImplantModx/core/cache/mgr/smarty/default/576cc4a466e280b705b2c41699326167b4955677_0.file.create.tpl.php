<?php /* Smarty version 3.1.27, created on 2017-01-04 20:11:20
         compiled from "G:\OpenServer\domains\ModxStart\super\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6125586d2cb8638204_87254653%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '576cc4a466e280b705b2c41699326167b4955677' => 
    array (
      0 => 'G:\\OpenServer\\domains\\ModxStart\\super\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1479321843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6125586d2cb8638204_87254653',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_586d2cb8657617_76025668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_586d2cb8657617_76025668')) {
function content_586d2cb8657617_76025668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6125586d2cb8638204_87254653';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>