<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolistログアウト</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once '../menu.php'; ?>
    <p>ログアウトしますか？</p>
    <button onclick="window.location.href='logout-output.php'"  id="submit">ログアウト</button>
</body>
</html>