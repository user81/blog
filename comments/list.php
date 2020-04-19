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
            <th>Номер коментария</th>
            <th>Почта</th>
            <th>Коментарий</th>
            <th>Дата коментария</th>
            <th>Пользователь</th>
            <th>Заголовок</th>
        </tr>
        <?php for ($i = $rows; $i != 0; --$i):
            $row = mysqli_fetch_row($coments); ?>
            <tr>
              <tr>
                <?php for ($j = 0; $j < 6; ++$j): ?>
                  <?php if ($j===5):  ?>
                  <td><a href="../topics/read.php?id=<?= ($row[$j+1]) ?>"><?= $row[$j] ?> </a></td>
                  <?php else: ?>
                   <td><?= $row[$j] ?> </td>
                  <?php endif; ?>
                <?php endfor; ?>
              </tr>
            </tr>
        <?php endfor; ?>
    </table>
    <input type="button" value="Создать сообщение" onClick='location.href="../topics/create.php"'>
    </html>
<?php
mysqli_close($link);

?>
