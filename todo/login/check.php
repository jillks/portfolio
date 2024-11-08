<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
<?php 
  session_start();
    // ログイン済みかのチェックをする
  if (isset($_SESSION['user'])) {
    echo 'ログイン済みです。<br>'.'<button onclick="window.location.href=\'../main/index.php\'" id="submit" >マイページ</button>';
    exit();
  } 
?>

