<!DOCTYPE html>
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
            <input type="hidden" name="csrf_token" value="{$csrf_token}">

            <div class="form-group">
                <label for="name">氏名</label>
                <input type="text" class="form-control" name="name" value="{$post.name}" readonly>
            </div>

            <div class="form-group">
                <label for="kana">フリガナ</label>
                <input type="text" class="form-control" name="kana" value="{$post.kana}" readonly>
            </div>

            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="text" class="form-control" name="tel" value="{$post.tel}" readonly>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" name="email" value="{$post.email}" readonly>
            </div>

            <div class="form-group">
                <label for="body">お問い合わせ内容</label>
                <textarea class="form-control" name="body" rows="5" readonly>{$post.body|escape}</textarea>
            </div>

            <p>上記の内容でよろしいでしょうか？</p>
            <input type="hidden" name="csrf_token" value="{$csrf_token}">

            <button type="button" class="btn btn-cancel" onclick="history.back()">キャンセル</button>
            <button type="submit" class="btn btn-submit">送信</button>

        </form>
    </div>

</body>

</html>