<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
require ('../classes/Topic.php');

$connection = new sql_errors();
$connection ->sql_connection();
$conect = new mysql_connection;

$date = date("Y-m-d");
$hour = 3600;
$time = $hour + time();

if (!isset($_COOKIE["hash"])) {
    $hash = "visit";
    setcookie("hash", $hash, $time, "topic.php");
    $uviews_stmt = new Topic();
    $uviews_stmt ->uviews_stmt($_GET["id"]);
}

if (isset($_GET["redirect"]) || !isset($_POST["topic_message"]) && !isset($_POST["topic_email"])) {
    $views_stmt = new Topic();
    $views_stmt ->uviews_stmt($date,$_GET["id"]);
}


$find_topic = new Topic();
$topic = $find_topic->findById($_GET["id"]);
?>
<html>
<?php require ('../includes/page-head.php'); ?>
<body>
 <table>
    <tr>
        <th>Заголовок</th>
        <th>Пользователь</th>
        <th>Дата</th>
        <th>Сообщение</th>
        <th>Просмотры</th>
        <th>Уникальные просмотры</th>
    </tr>
        <?php $row = mysqli_fetch_row($topic); ?>
    <tr>
        <?php for ($j = 0; $j < 6; ++$j): ?>
            <td><?= $row[$j] ?></td>
        <?php endfor; ?>
    </tr>
</table>

<?php require ('../comments/create.php'); ?>
<?php require ('../comments/read.php'); ?>
