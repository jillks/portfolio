<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolist新規登録</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    require_once '../menu.php';
    require_once 'check.php';
    ?>
    <form action="register.php">
        <h2>新規登録</h2>
        <p>ログインID <br><input type="text" id="login" name="login" ></p>
        <p>メールアドレス <br><input type="email" id="email" name="email" ></p>
        <p>パスワード <br> <input type="password" id="password" name="password" ><br></p>
        <button type="submit" id="submit"  method=POST>登録</button>
    </form>
</body>
</html>