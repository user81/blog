<?php
require('conect_sql.php');
sql_connection();
$post = mysqli_query($link, "SELECT `id`, `date`, `user`, `topic`   FROM `message_list` ORDER BY `id` DESC");
$rows = mysqli_num_rows($post);
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
    $row = mysqli_fetch_row($post);?>
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




