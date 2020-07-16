<?php
require_once 'function/Connect.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Приложение Todo-list</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="page">


<form action="function/Create.php" method="post" class="formstyle">
       
       <div class="logo">
            <img src="image/logo.png">
        </div>
        
        <input type="text" name="text" placeholder="Введите название задачи">

        <input type="text" name="type" placeholder="Введите тип (завершено, актуально)">
       
        
        <button type="submit">Добавить задачу</button>

        
        <button type="submit" class="login-btn">Завершить задачу</button>

        <button type="submit" class="login-btn">Восстановить задачу</button>

        <button type="submit" class="task"><a href="function/Delete_zav.php?id=<?= $tasks[0] ?>">Очистка списка завершённых задач</a></button>

        <button type="submit" class="task"><a href="function/ZavAkt.php?id=<?= $tasks[0] ?>">Завершение всех актуальных задач</a></button>




        <p class="msg none"></p>


       
    </form>


    <form  class="formtable">

        <table>
            <tr>

                <th>Id</th>
                <th>Задачи</th>
                <th>Тип задачи</th>

            </tr>
        

        <?php
 $task = mysqli_query($connect, "SELECT * FROM `task-list`");
$task = mysqli_fetch_all($task);
foreach ($task as $tasks) {

?>


<tr>
<td><?= $tasks[0]?> </td>
<td><?= $tasks[1]?> </td>
<td><?= $tasks[2]?> </td>
<td><a href="Update.php?id=<?= $tasks[0] ?>">Редактировать</a></td>
<td><a href="function/Delete.php?id=<?= $tasks[0] ?>">Удалить</a></td>


<?php
}

        ?>
 </table>  
    </form>




</div>

</body>
</html>
