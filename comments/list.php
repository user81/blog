<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();

$post = mysqli_query($link, "SELECT 'topic',`topics.id`, `comments.email_comments`, `comments.user`,  FROM `topics` INNER JOIN 'comments' ON 'topics.id' =`comments.topics_id` ");
$rows = mysqli_num_rows($post);
?>
<html>
<?php require ('../includes/page-head.php'); ?>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>User</th>
    </tr>
    <?php for ($i = $rows; $i != 0; --$i):
        $row = mysqli_fetch_row($post); ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>

        </tr>
    <?php endfor; ?>
</table>
</html>
<?php
mysqli_close($link);
?>

