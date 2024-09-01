<!DOCTYPE html>
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
            <li>氏名: {$inquiry.name|escape}</li>
            <li>フリガナ: {$inquiry.kana|escape}</li>
            <li>電話: {$inquiry.tel|escape}</li>
            <li>メールアドレス: {$inquiry.email|escape}</li>
            <li>お問い合わせ内容: {$inquiry.body|escape}</li>
        </ul>

        <form action="/contact/delete/{$inquiry.id}" method="post">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">
            <button type="submit" class="btn btn-submit">OK</button>
            <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
        </form>
    </div>
</body>

</html>