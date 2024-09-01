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
        <form action="/contact/delete/{$inquiry->id}" method="post">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">
            <h1>削除の確認</h1>
            <p>以下の内容を削除しようとしています。</p>

            <div class="form-group">
                <label for="nameField">氏名</label>
                <input type="text"  class="form-control" id = "nameField" name="name" value="{$inquiry->name|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="kanaField">フリガナ</label>
                <input type="text" class="form-control" id = "kanaField"name="kana" value="{$inquiry->kana|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="telField">電話番号</label>
                <input type="text" class="form-control" id = "telField" name="tel" value="{$inquiry->tel|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="emailField">メールアドレス</label>
                <input type="text" class="form-control" id = "emailField" name="email" value="{$inquiry->email|escape}" readonly>
            </div>


            <div class="form-group">
                <label for="bodyField">お問い合わせ内容</label>
                <textarea class="form-control" id = "bodyField" name="body" rows="5" readonly>{$inquiry->body|escape}</textarea>
            </div>

            <button type="submit" class="btn btn-submit">OK</button>
            <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
        </form>
    </div>
</body>

</html>