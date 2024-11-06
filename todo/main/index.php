<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolistマイページ</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>ToDoリスト</h2> 
    <?php 
    require_once '../menu.php'; 
    require_once 'add.php'; // session_start();が書かれているところ
    require_once 'check.php';

    if(isset($_SESSION['message'])) {
        echo '<br><h4>'.($_SESSION['message']).'</h4>';
        unset ($_SESSION['message']);
    }
    ?>

    
    <h2>予定</h2>
    <form action="index.php"  method="POST">
        <p>タスク名/タイトル</p>
        <input type="text" name="task" placeholder="例）勉強、買い物など" required>
        <p>説明</p>
        <textarea name="explanation" id="textbox" placeholder="例）友達とショッピングモール" required></textarea>
        <p>日時</p>
        <input type="date" name="createdate" required><br>
        <button type="submit" name="add">追加</button>
    </form>

    <h2>リスト</h2>
    <table>
       <thead>
           <tr>
               
               <th>タスク</th>
               <th>説明</th>
               <th>日時</th>
               <th>編集・削除</th>
           </tr>
       </thead>
       <tbody>
       <?php foreach ($todolist as $todo): ?>   <!-- add.phpのSELECTで取得してきた値を回して配列をそれぞれ受け取って表示させる -->
        <tr>
            <td><?= htmlspecialchars($todo['task']); ?></td>
            <td><?= htmlspecialchars($todo['explanation']); ?></td>
            <td><?= htmlspecialchars($todo['createdate']); ?></td>
            <td>
            <form action="edit.php" method="GET">
                <input type="hidden" name="postid" value="<?= $todo['id'] ?>"> 
                <input type="submit" value="編集" id="submit">
                </form>
                
            <form action="delete_form.php" method="GET">
                <input type="hidden" name="postid" value="<?= $todo['id'] ?>">
                <input type="submit" value="削除" id="submit">
            </form>
            </td>
           
        </tr>
        <?php endforeach; ?>
       </tbody>
    </table>
</body>
</html>