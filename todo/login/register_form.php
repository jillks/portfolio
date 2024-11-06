<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolist新規登録</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    require_once '../menu.php';
    require_once 'check.php';
    ?>
    <form action="register.php">
        <h2>新規登録</h2>
        <p>ログインID <br><input type="text" name="login" ></p>
        <p>メールアドレス <br><input type="email" name="email" ></p>
        <p>パスワード <br> <input type="password" name="password" ><br></p>
        <button type="submit" method=POST>登録</button>
    </form>
</body>
</html>