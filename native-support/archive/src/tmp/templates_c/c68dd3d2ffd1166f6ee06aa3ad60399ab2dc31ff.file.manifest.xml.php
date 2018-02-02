<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 00:30:51
         compiled from "E:\wamp\www\topic\km\native-support\archive\src\tpl\xmind\manifest.xml" */ ?>
<?php /*%%SmartyHeaderCode:18585695465a7340bb0e0cc3-96550738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68dd3d2ffd1166f6ee06aa3ad60399ab2dc31ff' => 
    array (
      0 => 'E:\\wamp\\www\\topic\\km\\native-support\\archive\\src\\tpl\\xmind\\manifest.xml',
      1 => 1449189412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18585695465a7340bb0e0cc3-96550738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attachments' => 0,
    'attach' => 0,
    'meta' => 0,
    'revisions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7340bb0fadf6_59805911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7340bb0fadf6_59805911')) {function content_5a7340bb0fadf6_59805911($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" standalone="no"<?php echo '?>';?>
<manifest xmlns="urn:xmind:xmap:xmlns:manifest:1.0"><?php if (!empty($_smarty_tpl->tpl_vars['attachments']->value)) {?><file-entry full-path="attachments/" media-type=""/><?php  $_smarty_tpl->tpl_vars['attach'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attach']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attach']->key => $_smarty_tpl->tpl_vars['attach']->value) {
$_smarty_tpl->tpl_vars['attach']->_loop = true;
?><file-entry full-path="<?php echo $_smarty_tpl->tpl_vars['attach']->value['filepath'];?>
" media-type="<?php echo $_smarty_tpl->tpl_vars['attach']->value['type'];?>
"/><?php } ?><?php }?><file-entry full-path="content.xml" media-type="text/xml"/><file-entry full-path="META-INF/" media-type=""/><file-entry full-path="META-INF/manifest.xml" media-type="text/xml"/><file-entry full-path="meta.xml" media-type="text/xml"/><file-entry full-path="Revisions/" media-type=""/><file-entry full-path="Revisions/<?php echo $_smarty_tpl->tpl_vars['meta']->value['id'];?>
/" media-type=""/><file-entry full-path="Revisions/<?php echo $_smarty_tpl->tpl_vars['meta']->value['id'];?>
/rev-1-<?php echo $_smarty_tpl->tpl_vars['revisions']->value['timestamp'];?>
.xml" media-type=""/><file-entry full-path="Revisions/<?php echo $_smarty_tpl->tpl_vars['meta']->value['id'];?>
/revisions.xml" media-type=""/><file-entry full-path="Thumbnails/" media-type=""/><file-entry full-path="Thumbnails/thumbnail.png" media-type="image/png"/></manifest><?php }} ?>
