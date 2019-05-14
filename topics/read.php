<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
$connection = new sql_errors();
$connection ->sql_connection();
$conect = new mysql_connection;
$date = date("Y-m-d");
$hour = 3600;
$time = $hour + time();
if (!isset($_COOKIE["hash"])) {
    $hash = "visit";
    setcookie("hash", $hash, $time, "topic.php");
    views_stmt($_GET["id"]);
}
if (isset($_GET["redirect"]) || !isset($_POST["topic_message"]) && !isset($_POST["topic_email"])) {
    views_stmt($_GET["id"]);
}
$topic = mysqli_query($link, "SELECT `topic`, `user`, `date`, `message`,`views`,`uviews` FROM `topics` WHERE `id` = '{$_GET["id"]}'");
if (isset($_POST["topic_message"]) && isset($_POST["topic_email"]) && isset($_POST["user"])) {
    topic($_POST["topic_email"], $_POST["topic_message"],$_POST["user"], $_GET["id"], $date);
}

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
    <? $row = mysqli_fetch_row($topic); ?>
    <tr>
        <?php for ($j = 0; $j < 6; ++$j): ?>
            <td><?= $row[$j] ?></td>
        <?php endfor; ?>
    </tr>
</table>
<?php require ('../comments/create.php'); ?>
<?php require ('../comments/read.php'); ?>
