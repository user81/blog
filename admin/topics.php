<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();

$topics = mysqli_query($link, "SELECT t2.topic, u.user, t2.views, t2.latest_view, t1.comments_count, t1.comments_max_date, t1.email_comments  FROM
     (SELECT comments.user FROM comments UNION SELECT topics.user FROM topics) as u
     LEFT OUTER JOIN
    (SELECT user, count(*) as comments_count, date_comments AS comments_max_date, email_comments  FROM comments  GROUP BY comments.user HAVING comments_max_date = max(date_comments)) as t1
    ON u.user = t1.user
         LEFT OUTER JOIN
    (SELECT user, views, latest_view, topic FROM topics GROUP BY topics.user) as t2
    ON u.user = t2.user");

$rows = mysqli_num_rows($topics);
?>
<html>
<?php require ('../includes/page-head.php'); ?>
<body>
<table>
    <tr>

        <th>Название</th>
        <th>Автор</th>
        <th>Количество просмотров</th>
        <th>Дата последнего просмотра</th>
        <th>Количество оставленных комментариев</th>
        <th>Дата последнего комментария</th>
        <th>email пользователя, оставившего последний комментарий</th>

    </tr>
    <?php for ($i = $rows; $i != 0; --$i):
        $row = mysqli_fetch_row($topics); ?>
        <tr>
            <?php for ($j = 0; $j < 7; ++$j): ?>
                <td><?= $row[$j] ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</html>
<?php
mysqli_close($link);

?>