<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ編集内容の確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>お問い合わせ編集内容の確認</h1>
        <form action="/contact/update/{$id|default:''|escape}" method="post">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">

            <div class="form-group">
                <label for="nameField">氏名</label>
                <input type="text" id="nameField" class="form-control" name="name"
                    value="{$post.name|default:''|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="kanaField">フリガナ</label>
                <input type="text" id="kanaField" class="form-control" name="kana"
                    value="{$post.kana|default:''|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="telField">電話番号</label>
                <input type="text" id="telField" class="form-control" name="tel" value="{$post.tel|default:''|escape}"
                    readonly>
            </div>

            <div class="form-group">
                <label for="emailField">メールアドレス</label>
                <input type="text" id="emailField" class="form-control" name="email"
                    value="{$post.email|default:''|escape}" readonly>
            </div>

            <div class="form-group">
                <label for="bodyField">お問い合わせ内容</label>
                <textarea id="bodyField" class="form-control" name="body" rows="5"
                    readonly>{$post.body|default:''|escape}</textarea>
            </div>

            <p>上記の内容で更新してよろしいでしょうか？</p>
            <div class="form-group">
                <div class="form-group">
                    <button type="submit" class="btn btn-submit">更新</button>
                    <button type="button" class="btn btn-cancel" onclick="history.back()">キャンセル</button>
                </div>
            </div>

        </form>
    </div>
</body>

</html>