<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');


$connection = new sql_errors();
$connection ->sql_connection();
$conect = new mysql_connection;

$date = date("Y-m-d");

if (isset($_POST["topic_message"]) && isset($_POST["topic_email"])&& isset($_POST["topic_user"])){
    comment( $_POST["topic_user"], $_POST["topic_email"], $_POST["topic_message"], $_GET["id"], $date);

       header("Location: ../topics/read.php?id={$_GET['id']}");
}
?>
