<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolistログイン</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
    require_once '../menu.php'; 
    require_once 'check.php';
   ?>

    <div id="main">
        <form action="login.php" method="POST">
            <h2>ToDoリスト</h2>
            <h3>ログインしてください</h3>
            <p>ログインID<br><input type="text" name="login"> </p>
            <p>パスワード<br><input type="password" name="password"> </p>
            <button type="submit" class="buttona" >ログイン</button>
            <!-- ログインのボタンが押されたらlogin.phpの処理が読み込まれてログインに成功すればindex.phpへ
            ログイン名などが間違えていたら戻るボタンでlogin_form.phpへ戻れるようにする -->
        </form>
        <h3>新規登録はこちら</h3>
        <!-- 新規登録の画面に飛べるようにする -->
        <button onclick="window.location.href='register_form.php'" class="buttona" >新規登録</button> <!-- Javascriptでのリンク遷移方法window.location.href -->
        </body>
    </div>
</html>