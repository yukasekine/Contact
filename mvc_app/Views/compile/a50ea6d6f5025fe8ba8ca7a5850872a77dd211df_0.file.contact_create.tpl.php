<?php
/* Smarty version 4.3.2, created on 2024-08-10 11:22:43
  from 'C:\xampp\htdocs\mvc_app\Views\contact\contact_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66b731636a6408_34240531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a50ea6d6f5025fe8ba8ca7a5850872a77dd211df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\contact_create.tpl',
      1 => 1723281718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b731636a6408_34240531 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>お問い合わせフォーム</h1>
        <form action="/contact/confirm" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">

            <div class="form-group">
                <label for="name">氏名</label>
                <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
            </div>

            <div class="form-group">
                <label for="kana">フリガナ</label>
                <input type="text" class="form-control" name="kana" placeholder="テストタロウ"
                    value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
            </div>

            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="text" class="form-control" name="tel" placeholder="1234567890"
                    value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control" name="email" placeholder="test@example.com"
                    value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
            </div>

            <div class="form-group">
                <label for="body">お問い合わせ内容</label>
                <textarea class="form-control" name="body" rows="5"
                    placeholder="お問い合わせ内容を入力してください"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                <p class="error-text"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
            </div>

            <button type="submit" class="btn btn-submit">送信</button>
        </form>
    </div>

    <div class="container">
        <h2>お問い合わせ一覧<h2>
                <table class="infomation">
                    <thead>
                        <tr>
                            <th>氏名</th>
                            <th>フリガナ</th>
                            <th>電話</th>
                            <th>メールアドレス</th>
                            <th>お問い合わせ内容</th>
                            <th>編集</th>
                            <th>削除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inquiries']->value, 'inquiry');
$_smarty_tpl->tpl_vars['inquiry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inquiry']->value) {
$_smarty_tpl->tpl_vars['inquiry']->do_else = false;
?>
                            <tr>
                                <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['kana'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['tel'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['inquiry']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td><a href="/contact/edit/<?php echo $_smarty_tpl->tpl_vars['inquiry']->value['id'];?>
" class="btn btn-edit">編集</a></td>
                                <td><a href="/contact/delete/<?php echo $_smarty_tpl->tpl_vars['inquiry']->value['id'];?>
" class="btn btn-cancel">削除</a></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
    </div>
</body>

</html><?php }
}
