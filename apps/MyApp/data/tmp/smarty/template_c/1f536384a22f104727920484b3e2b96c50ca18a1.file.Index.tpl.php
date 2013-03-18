<?php /* Smarty version Smarty-3.1-DEV, created on 2013-03-17 11:34:53
         compiled from "/Users/shuhei/Documents/web/BEAR.Sunday2/apps/MyApp/Resource/Page/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31792593951452bcd260889-59077071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f536384a22f104727920484b3e2b96c50ca18a1' => 
    array (
      0 => '/Users/shuhei/Documents/web/BEAR.Sunday2/apps/MyApp/Resource/Page/Index.tpl',
      1 => 1363459069,
      2 => 'file',
    ),
    '848255869e721fd5064bd5fbfdb461affc144122' => 
    array (
      0 => '/Users/shuhei/Documents/web/BEAR.Sunday2/apps/MyApp/Resource/View/layout/default.tpl',
      1 => 1363459069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31792593951452bcd260889-59077071',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51452bcd2d08f1_63198347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51452bcd2d08f1_63198347')) {function content_51452bcd2d08f1_63198347($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>
</head>
<body>
    <div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</h1>
</div>
</body>
</html><?php }} ?>