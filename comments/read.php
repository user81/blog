<?php
$display_comments = mysqli_query($link, "SELECT `date_comments`,`email_comments`,  `message_comments`  `id` FROM `comments` WHERE `topics_id` = '{$_GET["id"]}'");
$comments = mysqli_num_rows($display_comments);
?>

<table>
    <tr>
        <th>Дата</th>
        <th>Email</th>
        <th>Сообщение</th>
    </tr>
    <?php for ($i = $comments; $i != 0; --$i):
        $row = mysqli_fetch_row($display_comments); ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <a href="update.php"?id=<?= ($row[3]) ?>>Изменить </a>
        </tr>

    <?php endfor; ?>

</table>