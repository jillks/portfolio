<link rel="stylesheet" href="css/style.css">

<?php 
  session_start();
    // ログイン済みかのチェックをする
  if (isset($_SESSION['user'])) {
    echo 'ログイン済みです。<br>'.'<button onclick="window.location.href=\'../main/index.php\'" class="buttona" >マイページ</button>';
    exit();
  } 
?>

