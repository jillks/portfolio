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

    <div class="form">
        <form action="login.php" method="POST">
            <label class="label">
            ログインID<br>
            <input type="text" id="login" name="login"> 
            </label>
            <label class="label">
            パスワード<br>
            <input type="password" id="password" name="password">
            </label>
            <button type="submit" id="submit">ログイン</button>
            <!-- ログインのボタンが押されたらlogin.phpの処理が読み込まれてログインに成功すればindex.phpへ
            ログイン名などが間違えていたら戻るボタンでlogin_form.phpへ戻れるようにする -->
        </form>
       
        <!-- 新規登録の画面に飛べるようにする -->
        <button onclick="window.location.href='register_form.php'" id="submit" >新規登録</button> <!-- Javascriptでのリンク遷移方法window.location.href -->
     </div>    
    </body>
</html>