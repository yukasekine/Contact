<?php
/* Smarty version 4.3.2, created on 2024-08-10 11:28:42
  from 'C:\xampp\htdocs\mvc_app\Views\contact\contact_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66b732ca254415_78528456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cbb90d104adde04beba77a4cb9ec551ab7d49cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\contact_delete.tpl',
      1 => 1723281931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b732ca254415_78528456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>削除確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>削除の確認</h1>
        <p>以下の内容を削除しようとしています。</p>
        <ul>
            <li>氏名: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>フリガナ: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['kana'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>電話: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>メールアドレス: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>お問い合わせ内容: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</li>
        </ul>

        <form action="/contact/delete/<?php echo $_smarty_tpl->tpl_vars['inquiry']->value['id'];?>
" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
            <button type="submit" class="btn btn-submit">OK</button>
            <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
        </form>
    </div>
</body>

</html><?php }
}
