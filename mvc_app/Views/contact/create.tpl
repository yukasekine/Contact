<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>お問い合わせフォーム</h1>
        <form action="/contact/create" method="post">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">

            <div class="form-group">
                <label for="nameField">氏名</label>
                <input type="text" id= "nameField" class="form-control" name="name" placeholder="テスト太郎" value="{$post.name|default:''|escape}">
                <p class="error-text">{$errorMessages['name']|default:''}</p>
            </div>

            <div class="form-group">
                <label for="kanaField">フリガナ</label>
                <input type="text"  id = "kanaField"class="form-control" name="kana" placeholder="テストタロウ"
                    value="{$post.kana|default:''|escape}">
                <p class="error-text">{$errorMessages['kana']|default:''}</p>
            </div>
 
            <div class="form-group">
                <label for="telField">電話番号</label>
                <input type="text" id = "telField" class="form-control" name="tel" placeholder="1234567890"
                    value="{$post.tel|default:''|escape}">
                <p class="error-text">{$errorMessages['tel']|default:''}</p>
            </div>

            <div class="form-group">
                <label for="emailField">メールアドレス</label>
                <input type="email"  id = "emailField"class="form-control" name="email" placeholder="test@example.com"
                    value="{$post.email|default:''|escape}">
                <p class="error-text">{$errorMessages['email']|default:''}</p>
            </div>

            <div class="form-group">
                <label for="bodyField">お問い合わせ内容</label>
                <textarea class="form-control" id = "bodyField" name="body" rows="5"
                    placeholder="お問い合わせ内容を入力してください">{$post.body|default:''|escape}</textarea>
                <p class="error-text">{$errorMessages['body']|default:''}</p>
            </div>

            <button type="submit" class="btn btn-submit">送信</button>
        </form>
    </div>

    <div class="container">
        <h2>お問い合わせ一覧</h2>
                <table class="table table-striped table-bordered">
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
                        {foreach $inquiries as $inquiry}
                            <tr>
                                <td>{$inquiry->name|escape}</td>
                                <td>{$inquiry->kana|escape}</td>
                                <td>{$inquiry->tel|escape}</td>
                                <td>{$inquiry->email|escape}</td>
                                <td>{$inquiry->body|escape}</td>
                                <td><a href="/contact/edit/{$inquiry->id}" class="btn btn-edit">編集</a></td>
                                <td><a href="/contact/delete/{$inquiry->id}" class="btn btn-cancel">削除</a></td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table> 
    </div> 
</body>

</html>