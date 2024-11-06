<link rel="stylesheet" href="../css/style.css">

<?php
session_start();
// sessionを利用してログイン機能を保存できるようにしておく
require_once '../menu.php';

// userの中身をリセットする
unset($_SESSION['user']);

// 自分の作成したDBへ接続
$pdo = new PDO(
    'mysql:host=localhost;dbname=todo_app;charset=utf8',
    'lb', 'password'
);

$query = 'SELECT * FROM users WHERE login=? AND password=?'; // 登録してある内容をsqlから選択する
$sql = $pdo->prepare($query); // $queryの記述をsqlに送る
$sql -> execute([$_REQUEST['login'], $_REQUEST['password']]); // executeで$queryを実行postで送られてきた['login']と['password']の値をいれる

// ループ処理をしてSELECTされた配列を回して$_SESSION['user']の中にいれる
foreach($sql as $row) {
    $_SESSION['user'] = [
    'id'=>$row['id'],
    'login'=>$row['login'], 
    'email'=>$row['email'], 
    'password'=>$row['password']];
}

// $_SESSION['user']に値が入っていればログインが成功しindex.phpに飛ぶ
if(isset($_SESSION['user'])) {
    /* echo 'ようこそ、', $_SESSION['user']['login'], 'さん。' .'<br>'.
     '<a href="../main/index.php">マイページへ</a>';この書き方で別のサイトに飛べるようにしていたが、
    header('Location')で飛ばせるのでこの記述じゃなくてよい */
    header('Location: ../main/index.php');
    exit();
    
}else {  // もしも値が入っておらずnullの場合はログイン失敗login_form.phpに戻れるように戻るボタンをつける
    echo 'ログイン名またはパスワードが違います。'.'<br>'.'<a href="login_form.php">戻る</a>';
}
?>



</body>
</html>
