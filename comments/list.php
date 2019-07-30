  <?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();
$coments = mysqli_query($link, "SELECT `comments`.id, `comments`.email_comments, `comments`.message_comments, `comments`.date_comments, `comments`.user, `topics`.topic, `topics`.id FROM `comments` LEFT JOIN `topics` ON `comments`.`topics_id` = `topics`.`id`");

$rows = mysqli_num_rows($coments);
?>
    <html>
    <?php require ('../includes/page-head.php'); ?>
    <body>
    <table>
        <tr>
            <th>Номер коментария</th>x1
            <th>Почта</th>
            <th>Коментарий</th>
            <th>Дата коментария</th>
            <th>Пользователь</th>
            <th>Заголовок</th>
        </tr>
        <?php for ($i = $rows; $i != 0; --$i):
            $row = mysqli_fetch_row($coments); ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
                <td>
                    <a href="../topics/read.php?id=<?= ($row[6]) ?>"><?= $row[5] ?> </a>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
    <input type="button" value="Создать сообщение" onClick='location.href="../topics/create.php"'>
    </html>
<?php
mysqli_close($link);

?>
