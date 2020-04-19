
<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');

$success = false;
$errors = [];
$connection = new sql_errors();
$connection ->sql_connection();

$coment = mysqli_query($link, "SELECT  `email_comments`, `message_comments`,`user`, `topics_id`  FROM `comments` WHERE `id` = '{$_GET["id"]}'");
$row = mysqli_fetch_row($coment);
if (isset( $row[0]) && isset($row[1])&& isset( $row[2])){
    delete_comments(  $_GET["id"]);
}
header('Location: ../topics/read.php?id=' . $row[3]);
?>