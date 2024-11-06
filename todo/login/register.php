<link rel="stylesheet" href="../css/style.css">
<?php
    session_start();
    require_once '../menu.php';
    
    $pdo = new PDO (
        'mysql:host=localhost;dbname=todo_app;charset=utf8',
        'lb', 'password'
    );

    // ログイン名が重複していないかselectでチェックする
    if (isset($_SESSION['user'])) {
        $query = 'SELECT * FROM users WHERE login = ? AND id !=?';
        $sql = $pdo->prepare($query);
        $sql -> execute([
            $_REQUEST['login'],
            $_SESSION['user']['id']
        ]);
    } else {
        $query = 'SELECT * FROM users WHERE login=?';
        $sql = $pdo->prepare($query);
        $sql->execute([$_REQUEST['login']]);
    }

    $result = $sql->fetchALL();

    if(empty($result)) {    // emptyは$resultが空かどうかのチェック
        // ログインしている状態で入力する場合は内容を更新する
        if(isset($_SESSION['user'])) {
            $query = 'UPDATE users SET login = ?, email = ?, password = ? WHERE id =?';
            $sql = $pdo->prepare($query);
            $sql->execute([
                $_REQUEST['login'],
                $_REQUEST['email'],
                $_REQUEST['password'],
                $_SESSION['user']['id']
            ]);
            // セッション情報を変更
            $_SESSION['user'] = [
                'id' => $_SESSION['user']['id'],
                'login' => $_REQUEST['login'],
                'email' => $_REQUEST['email'],
                'password' => $_REQUEST['password']
            ];
            echo '情報を更新しました。';
        } else { // 登録がないので新規登録する
            $query = 'INSERT INTO users VALUES(NULL, ?, ?, ?)';
            $sql = $pdo->prepare($query);
            $sql->execute([
                $_REQUEST['login'],
                $_REQUEST['email'],
                $_REQUEST['password']
            ]);
            echo '情報を登録しました。';
        }
    }    else {
            echo 'ログイン名は既に使用されております。変更してください。';
        }
    
    

?>