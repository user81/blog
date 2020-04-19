<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
require ('../classes/Topic.php');

$connection = new sql_errors();
$connection ->sql_connection();
$topic_list = new Topic();
//$rows =  $topic_list->findAll();
//$rows_count = mysqli_num_rows($rows);
$row_topic =  $topic_list->findAll();


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
    <?php // for ($i = $rows_count; $i != 0; --$i):
          // $row = mysqli_fetch_row($rows); 
          foreach ($row_topic as $row): ?>
        <tr>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td>
                <a href="read.php?id=<?= ($row[0]) ?>"><?= $row[3] ?> </a>
                <a href="update.php?id=<?= ($row[0]) ?>">Изменить </a>
                <a href="delete_topics.php?id=<?= ($row[0]) ?>">удалить </a>
            </td>

        </tr>
    <?php endforeach;
    //endfor; ?>
</table>
<input type="button" value="Создать сообщение" onClick='location.href="../topics/create.php"'>
</html>