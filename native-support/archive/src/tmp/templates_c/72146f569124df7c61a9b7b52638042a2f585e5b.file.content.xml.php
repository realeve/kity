<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 00:30:50
         compiled from "E:\wamp\www\topic\km\native-support\archive\src\tpl\xmind\content.xml" */ ?>
<?php /*%%SmartyHeaderCode:9666286115a7340bae1b801-19671318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72146f569124df7c61a9b7b52638042a2f585e5b' => 
    array (
      0 => 'E:\\wamp\\www\\topic\\km\\native-support\\archive\\src\\tpl\\xmind\\content.xml',
      1 => 1449189412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9666286115a7340bae1b801-19671318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'topic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7340baed8d12_39901460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7340baed8d12_39901460')) {function content_5a7340baed8d12_39901460($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" standalone="no"<?php echo '?>';?>
<xmap-content xmlns="urn:xmind:xmap:xmlns:content:2.0" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:xlink="http://www.w3.org/1999/xlink" timestamp="1407310121003" version="2.0"><sheet id="<?php echo $_smarty_tpl->tpl_vars['meta']->value['id'];?>
" timestamp="<?php echo $_smarty_tpl->tpl_vars['meta']->value['timestamp'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['topic']->value['data'])) {?><?php echo $_smarty_tpl->getSubTemplate ("xmind/topic.xml", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('topic'=>$_smarty_tpl->tpl_vars['topic']->value,'clazz'=>true), 0);?>
<?php }?><title>画布 1</title></sheet></xmap-content><?php }} ?>
