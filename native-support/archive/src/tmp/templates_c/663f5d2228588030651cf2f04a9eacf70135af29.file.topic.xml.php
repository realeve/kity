<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 00:30:50
         compiled from "E:\wamp\www\topic\km\native-support\archive\src\tpl\xmind\topic.xml" */ ?>
<?php /*%%SmartyHeaderCode:15485044135a7340baeff0d3-20167771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663f5d2228588030651cf2f04a9eacf70135af29' => 
    array (
      0 => 'E:\\wamp\\www\\topic\\km\\native-support\\archive\\src\\tpl\\xmind\\topic.xml',
      1 => 1449189412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15485044135a7340baeff0d3-20167771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'topic' => 0,
    'clazz' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7340bb029af8_51573133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7340bb029af8_51573133')) {function content_5a7340bb029af8_51573133($_smarty_tpl) {?><topic id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['meta']['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['clazz']->value==true) {?>structure-class="org.xmind.ui.map.clockwise" <?php }?> timestamp="<?php echo $_smarty_tpl->tpl_vars['topic']->value['meta']['timestamp'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['text'])) {?><title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['topic']->value['data']['text'])===null||$tmp==='' ? '' : $tmp);?>
</title><?php }?><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['priority'])||isset($_smarty_tpl->tpl_vars['topic']->value['data']['progress'])) {?><marker-refs><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['priority'])) {?><marker-ref marker-id="priority-<?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['priority'];?>
"/><?php }?><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['progress'])) {?><marker-ref marker-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['progress'];?>
"/><?php }?></marker-refs><?php }?><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['image'])) {?><xhtml:img svg:height="<?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['imageSize']['height'];?>
" svg:width="<?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['imageSize']['width'];?>
" xhtml:src="xap:<?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['image']['filepath'];?>
"/><?php }?><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['children'])) {?><children><topics type="attached"><?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topic']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><?php echo $_smarty_tpl->getSubTemplate ("xmind/topic.xml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('topic'=>$_smarty_tpl->tpl_vars['t']->value,'clazz'=>false), 0);?>
<?php } ?></topics></children><?php }?><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data']['resource'])) {?><labels><label><?php echo $_smarty_tpl->tpl_vars['topic']->value['data']['resource'];?>
</label></labels><?php }?></topic><?php }} ?>
