<?php
require('conect_sql.php');
$conect = new mysql_connection;
$conect->sql_connection();
mysqli_query($link, "UPDATE `topics` SET `id`, `date`, `user`, `topic` ");
$post = mysqli_query($link, "SELECT `id`, `date`, `user`, `topic`   FROM `topics` ORDER BY `id` DESC");
$rows = mysqli_num_rows($post);
?>
<html>
<head>
    <meta charset="UTF-8"/>

</head>

<body>
<table>
    <tr>
        <th>Дата</th>
        <th>Пользователь</th>
        <th>Соообщение</th>
    </tr>
    <?php for ($i = $rows; $i != 0; --$i):
        $row = mysqli_fetch_row($post); ?>
        <tr>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td>
                <a href="topic.php?id=<?= ($row[0]) ?>"><?= $row[3] ?> </a>

            </td>
        </tr>
    <?php endfor; ?>
</table>
<input type="button" value="Создать сообщение" onClick='location.href="new-post.php"'>
</html>
<?php
mysqli_close($link);
?>




