<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();

$topics = mysqli_query($link, "  SELECT u.email_comments, t2.topics_count, t2.topics_max_date, t1.comments_count, t1.comments_max_date FROM
  (SELECT email_comments   FROM comments UNION SELECT topics.email FROM topics) as u
     LEFT OUTER JOIN
   (SELECT email, count(*) as topics_count, max(date) AS topics_max_date  FROM topics GROUP BY topics.email) as t2
   ON u.email_comments = t2.email
   LEFT OUTER JOIN
   (SELECT comments.email_comments, count(*) as comments_count, max(date_comments) as comments_max_date FROM comments  GROUP BY comments.email_comments) as t1
     ON u.email_comments = t1.email_comments");

$rows = mysqli_num_rows($topics);
?>
    <html>
    <?php require ('../includes/page-head.php'); ?>
    <body>
    <table>
        <tr>
            <th>email</th>
            <th>Количество созданных тем</th>
            <th>Дата последней созданной темы</th>
            <th>Количество оставленных комментариев</th>
            <th>Дата последнего комментария</th>

        </tr>
        <?php for ($i = $rows; $i != 0; --$i):
            $row = mysqli_fetch_row($topics); ?>
            <tr>
                <?php for ($j = 0; $j < 5; ++$j): ?>
                    <td><?= $row[$j] ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    </html>
<?php
mysqli_close($link);

?>

