<?php

if(isset($_SESSION['user'])) {
        echo '<h3>'.$_SESSION['user']['login'].'さんのマイページ</h3>';
    } else {
        // $_SESSION['user']に値がない場合はマイページを見せないようにする
        echo 'ログインをしてください。<br>'.'<button onclick="window.location.href=\'../login/login_form.php\'" class="buttona" >ログイン</button>';
        // echoするときにbuttonのonclickのクォートが重複しそのままではエラーになるので\バックスラッシュで切るようにすることで重複せずエラーが出ない
        exit();
    
    }
    ?>
  