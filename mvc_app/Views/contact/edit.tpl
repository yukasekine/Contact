<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ内容の編集</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>お問い合わせ内容の編集</h1>
        <form action="/contact/edit/{$inquiry->id}" method="post">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">

            <div class="form-group">
                <label for="nameField">氏名</label>
                <input type="text" class="form-control" id="nameField" name="name"
                    value="{if isset($post.name)}{$post.name|escape}{else}{$inquiry->name|escape}{/if}">
                <p class="error-text">{$errorMessages.name|default:''}</p>
            </div>

            <div class="form-group">
                <label for="kanaField">フリガナ</label>
                <input type="text" class="form-control" id="kanaField" name="kana"
                    value="{if isset($post.kana)}{$post.kana|escape}{else}{$inquiry->kana|escape}{/if}">
                <p class="error-text">{$errorMessages.kana|default:''}</p>
            </div>

            <div class="form-group">
                <label for="telField">電話</label>
                <input type="text" class="form-control" id="telField" name="tel"
                    value="{if isset($post.tel)}{$post.tel|escape}{else}{$inquiry->tel|escape}{{/if}}">
                <p class="error-text">{$errorMessages.tel|default:''}</p>
            </div>

            <div class="form-group">
                <label for="emailField">メールアドレス</label>
                <input type="email" class="form-control" id="emailField" name="email"
                    value="{if isset($post.email)}{$post.email|escape}{else}{$inquiry->email|escape}{{/if}}">
                <p class="error-text">{$errorMessages.email|default:''}</p>
            </div>

            <div class="form-group">
                <label for="bodyField">お問い合わせ内容</label>
                <textarea class="form-control" id="bodyField" name="body"
                    rows="5">{if isset($post.body)}{$post.body|escape}{else}{$inquiry->body|escape}{{/if}}</textarea>
                <p class="error-text">{$errorMessages.body|default:''}</p>
            </div>

            <button type="submit" class="btn btn-submit">更新へ進む</button>
            <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
        </form>
    </div>
</body>

</html>