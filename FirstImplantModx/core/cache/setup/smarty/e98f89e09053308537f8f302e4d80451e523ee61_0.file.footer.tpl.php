<?php /* Smarty version 3.1.27, created on 2016-11-16 21:44:32
         compiled from "G:\OpenServer\domains\ModxStart\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2533582ca910a7f8e3_94274397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98f89e09053308537f8f302e4d80451e523ee61' => 
    array (
      0 => 'G:\\OpenServer\\domains\\ModxStart\\setup\\templates\\footer.tpl',
      1 => 1479123718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2533582ca910a7f8e3_94274397',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582ca910b10182_53833458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582ca910b10182_53833458')) {
function content_582ca910b10182_53833458 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'G:/OpenServer/domains/ModxStart/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2533582ca910a7f8e3_94274397';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>