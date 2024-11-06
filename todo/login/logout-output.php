    <link rel="stylesheet" href="../css/style.css">

    <?php
    session_start();
    require_once '../menu.php';

    if(isset($_SESSION['user'])) {
        // $_SESSION['user]が見つかったら中身を初期化してログアウトする
        unset($_SESSION['user']);
        echo 'ログアウトしました。';
    } else {
        // ログアウトした状態で押している場合はログアウトしているのでログインの画面に戻れるようにする
        echo 'すでにログアウトしています。';
    }
    ?>
   <br><button onclick="window.location.href='login_form.php'" class="buttona" >ログイン</button>
