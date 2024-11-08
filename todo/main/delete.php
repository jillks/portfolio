<link rel="stylesheet" href="../css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
<?php

session_start();
require_once '../menu.php';

$pdo = new PDO(
    'mysql:host=localhost;dbname=todo_app;charset=utf8',
    'lb', 'password'
);

 // 自分の編集したいデータをDBから拾って表示する
if(isset($_GET['postid'])) { 
    $postid = $_GET['postid'];

    $query = 'SELECT * FROM todos WHERE id = ?';
    $sql = $pdo->prepare($query);
    $sql->execute([$postid]);
    $todos = $sql->fetch(PDO::FETCH_ASSOC); //fetch(PDO::FETCH_ASSOC)で無駄なデータを取得せず必要なものだけ取得する



if(isset($_REQUEST['delete'])) { // delete_form.phpで削除ボタンが押されたら削除の処理をする
    $postid =  $_GET['postid'];
    $userid = $_SESSION['user']['id'];
           
    $query = 'DELETE FROM todos WHERE id = ? AND user_id = ?';
    $sql = $pdo->prepare($query);
    $sql->execute([$postid,$userid]);

    echo '削除しました。'.'<br>'.'<button onclick="window.location.href=\'../main/index.php\'" class="buttona" >マイページ</button>';
}
} else {
    echo 'エラーが発生しました';
}

?>
