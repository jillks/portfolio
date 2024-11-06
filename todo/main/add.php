<?php
session_start();

if(isset($_SESSION['user'])) {
   $userid = $_SESSION['user']['id']; // sessionに保存されているuserの中のidを代入

   $pdo = new PDO(
    'mysql:host=localhost;dbname=todo_app;charset=utf8',
    'lb', 'password'
    );

   $query = 'SELECT * FROM todos WHERE user_id = ? ORDER BY createdate ASC'; 
   // DBのuser_idが外部キーでそれぞれで割り当ててあるためそれによって別々にtodoリストの内容を引っ張ってこれるようにする
    $sql = $pdo->prepare($query);
    $sql->execute([$userid]);
    $todolist = $sql->fetchAll(PDO::FETCH_ASSOC); 
    // fetchAllで該当する配列すべてを$todolistに代入する

    

    if(isset($_REQUEST['add'])) {
        // index.phpで入力したデータを受け取ったら受け取ったデータをDBに送る
        $todos = [
             $_REQUEST['task'],
            $_REQUEST['explanation'],
            $_REQUEST['createdate'],
            $userid
        ];
        // todo追加
        $query = 'INSERT INTO todos (task, explanation, createdate, user_id) VALUES(?, ?, ?, ?)';
        $sql = $pdo->prepare($query);
        $sql->execute($todos); 
        $_SESSION['message'] = '追加しました。';
        header('Location:index.php');
        exit();
    } 
    
} 
?>