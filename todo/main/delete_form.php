<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDolist削除</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <h2>ToDoリスト</h2> 
    <?php 
    require_once '../menu.php'; 
    require_once 'delete.php';
    ?>

   <h2>削除</h2>

   <h4>削除してもよろしいですか</h4>
   <div class="main">
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
               <th>更新</th>
           </tr>
        </thead>
        <tbody>
        <tr>
            <form action="delete.php" method="GET">
                <input type="hidden" name="postid" value="<?= $todos['id'] ?>">
                <td><input type="text" name="task" value="<?= $todos['task'] ?>"></td>  <!-- valueで前のページの入力していたものを表示させる -->
                <td><textarea name="explanation" id="explanation"><?= $todos['explanation'] ?></textarea></td> <!-- textareaは<textarea>ここにかく</textarea> -->
                <td><input type="date" name="createdate" ></td>
                <td><input type="submit" name="delete" value="削除" id="delete">
               </form>
            </td>
        </tr>
       </tbody>
    </table>
    </div>
    </div>
</body>
</html>