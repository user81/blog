<?php
$host = '127.0.0.1'; // Хост, у нас все локально
$user = 'root'; // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'form'; // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
}

$mesage = mysqli_query($link, "SELECT `id`, `date`, `user`, `topic`   FROM `message-list1` ORDER BY `id` DESC");

$rows = mysqli_num_rows($mesage);
?>

<html>
<head>
    <meta charset="UTF-8"/>
</head>

<body>
<table>
    <tr>

        <th>Date</th>
        <th>User</th>
        <th>Topic</th>

    </tr>

<?php for ($i = $rows; $i != 0; --$i):
    $row = mysqli_fetch_row($mesage);?>
<tr>

    <td><?=$row[1]?></td>
    <td><?=$row[2]?></td>
   <td> <a href="topic.php?id=<?php print_r($row[0]) ?>"><?=$row[3]?> </a> </td>

    <?php  ?>
</tr>

<?php endfor; ?>
</table>

<input type="button" value="Создать сообщение" onClick='location.href="new-post.php"'>
</html>

<?php
mysqli_close($link);
?>




