<?php
/* Smarty version 4.3.2, created on 2024-08-09 12:44:29
  from 'C:\xampp\htdocs\mvc_app\Views\contact\contact_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66b5f30d0e9ee6_59553014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9b1df8e6f13c2ce61ab7a82f62a3d011fcad55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\contact_edit.tpl',
      1 => 1723200094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5f30d0e9ee6_59553014 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ内容の編集</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>お問い合わせ内容の編集<h1>
                <form action="/contact/update/<?php echo $_smarty_tpl->tpl_vars['inquiry']->value['id'];?>
" method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
                    <div class="form-group">
                        <label for="name">氏名</label>
                        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <p class="error-text"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value[(($tmp = 'name' ?? null)===null||$tmp==='' ? '' ?? null : $tmp)];?>
</p>
                    </div>

                    <div class="form-group">
                        <label for="kana">フリガナ</label>
                        <input type="text" class="form-control" name="kana" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['kana'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <p class="error-text"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value[(($tmp = 'kana' ?? null)===null||$tmp==='' ? '' ?? null : $tmp)];?>
</p>
                    </div>

                    <div class="form-group">
                        <label for="tel">電話</label>
                        <input type="text" class="form-control" name="tel" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <p class="error-text"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value[(($tmp = 'tel' ?? null)===null||$tmp==='' ? '' ?? null : $tmp)];?>
</p>
                    </div>

                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                    </div>

                    <div class="form-group">
                        <label for="body">お問い合わせ内容</label>
                        <textarea class="form-control" name="body" rows="5"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                    </div>

                    <button type="submit" class="btn btn-submit">更新</button>
                    <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
                </form>
    </div>
</body>

</html><?php }
}
