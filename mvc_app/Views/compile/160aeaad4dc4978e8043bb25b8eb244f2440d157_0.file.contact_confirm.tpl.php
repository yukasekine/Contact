<?php
/* Smarty version 4.3.2, created on 2024-08-07 14:48:53
  from 'C:\xampp\htdocs\mvc_app\Views\contact\contact_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66b36d35c4bb83_30460448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160aeaad4dc4978e8043bb25b8eb244f2440d157' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\contact_confirm.tpl',
      1 => 1723034854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b36d35c4bb83_30460448 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ内容の確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>お問い合わせ内容の確認</h1>
        <form action="/contact/complete" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">

            <div class="form-group">
                <label for="name">氏名</label>
                <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
" readonly>
            </div>

            <div class="form-group">
                <label for="kana">フリガナ</label>
                <input type="text" class="form-control" name="kana" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['kana'];?>
" readonly>
            </div>

            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="text" class="form-control" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['tel'];?>
" readonly>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
" readonly>
            </div>

            <div class="form-group">
                <label for="body">お問い合わせ内容</label>
                <textarea class="form-control" name="body" rows="5" readonly><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>

            <p>上記の内容でよろしいでしょうか？</p>
            <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">

            <button type="button" class="btn btn-cancel" onclick="history.back()">キャンセル</button>
            <button type="submit" class="btn btn-submit">送信</button>

        </form>
    </div>

</body>

</html><?php }
}
