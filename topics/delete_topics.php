<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');
require ('../classes/Topic.php');

$success = false;
$errors = [];
$connection = new sql_errors();
$connection ->sql_connection();

$find_topic = new Topic();
$topic = $find_topic->findById($_GET["id"]);
$row = mysqli_fetch_row($topic);
   if (isset( $row[0]) && isset($row[1])&& isset( $row[2])&& isset( $row[3])){

       $delete_topics =new Topic();
       $delete_topics ->delete_toppic( $_GET["id"]);
   }
header('Location:../topics/list.php');

?>


