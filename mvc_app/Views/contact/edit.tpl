<!DOCTYPE html>
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
                <form action="/contact/update/{$inquiry->id}" method="post">
                    <input type="hidden" name="csrf_token" value="{$csrf_token}">
                    <div class="form-group">
                        <label for="name">氏名</label>
                        <input type="text" class="form-control" name="name" value="{$inquiry->name|default:''|escape}">
                        <p class="error-text">{$errorMessages['name']|default:''}</p>
                    </div>

                    <div class="form-group">
                        <label for="kana">フリガナ</label>
                        <input type="text" class="form-control" name="kana" value="{$inquiry->kana|default:''|escape}">
                        <p class="error-text">{$errorMessages['kana']|default:''}</p>
                    </div>

                    <div class="form-group">
                        <label for="tel">電話</label>
                        <input type="text" class="form-control" name="tel" value="{$inquiry->tel|default:''|escape}">
                        <p class="error-text">{$errorMessages['tel']|default:''}</p>
                    </div>

                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" class="form-control" name="email"
                            value="{$inquiry->email|default:''|escape}">netstat -ano | findstr 3306netstat -ano | findstr 3306
                        <p class="error-text">{$errorMessages['email']|default:''}</p>
                    </div>

                    <div class="form-group">
                        <label for="body">お問い合わせ内容</label>
                        <textarea class="form-control" name="body"
                            rows="5">{$inquiry->body|default:''|escape}</textarea>
                        <p class="error-text">{$errorMessages['body']|default:''}</p>
                    </div>

                    <p>上記の内容でよろしいでしょうか？</p>

                    <button type="submit" class="btn btn-submit">更新</button>
                    <button type="button" class="btn btn-cancel" onclick="location.href='/contact/index'">キャンセル</button>
                </form>
    </div>
</body>

</html>