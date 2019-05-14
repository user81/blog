<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();

$post = mysqli_query($link, "SELECT `id`, `date`, `user`, `topic`   FROM `topics` ORDER BY `id` DESC");
$rows = mysqli_num_rows($post);
?>
    <html>
    <?php require ('../includes/page-head.php'); ?>
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
                    <a href="read.php?id=<?= ($row[0]) ?>"><?= $row[3] ?> </a>
                    <a href="update.php?id=<?= ($row[0]) ?>">Изменить </a>
                </td>

            </tr>
        <?php endfor; ?>
    </table>
    <input type="button" value="Создать сообщение" onClick='location.href="new-post.php"'>
    </html>
<?php
mysqli_close($link);
?>