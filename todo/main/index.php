<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolistマイページ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    require_once '../menu.php'; 
    require_once 'add.php'; // session_start();が書かれているところ
    require_once 'check.php';

    if(isset($_SESSION['message'])) {
        echo '<br><h4>'.($_SESSION['message']).'</h4>';
        unset ($_SESSION['message']);
    }
    ?>
<div class="main">
    <div class="todo">
        <form action="index.php"  method="POST">
            <label class="label">
            タスク名/タイトル
            <input type="text" id="text" name="task" placeholder="例）勉強、買い物など" required>
            </label>
            <label class="label">
            説明
            <textarea name="explanation" id="textbox" placeholder="例）友達とショッピングモール" required></textarea>
            </label>
            <label class="label">
            日時
         <input type="date" id="date" name="createdate" required><br>
            </label>
            <button type="submit" id="submit" name="add">追加</button>
        </form>
    </div>
<div class="list">
    <h2>リスト</h2>
    <table id="box">
        <colgroup>
        <col/>
        <col/>
        <col/>
        <col style="width: 10%;"/>
    </colgroup>
       <thead>
           <tr>
               
               <th>タスク</th>
               <th>説明</th>
               <th>日時</th>
               <th>編集・削除</th>
           </tr>
       </thead>
       <div clsss="dlt">
       <tbody>
       <?php foreach ($todolist as $todo): ?>   <!-- add.phpのSELECTで取得してきた値を回して配列をそれぞれ受け取って表示させる -->
        <tr>
            <td><?= htmlspecialchars($todo['task']); ?></td>
            <td><?= htmlspecialchars($todo['explanation']); ?></td>
            <td><?= htmlspecialchars($todo['createdate']); ?></td>
            <td>
            <form action="edit.php" class="btn" method="GET">
                <input type="hidden" name="postid" value="<?= $todo['id'] ?>"> 
                <input type="submit" value="編集" id="edit">
                </form>
                
            <form action="delete_form.php" class="btn" method="GET">
                <input type="hidden" name="postid" value="<?= $todo['id'] ?>">
                <input type="submit" value="削除" id="delete">
            </form>
            </td>
        </tr>
        <?php endforeach; ?>
       </tbody>
       </div>
    </table>
    </div>
</div>  
</body>
</html>