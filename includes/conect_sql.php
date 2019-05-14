<?php
$host = '127.0.0.1'; // Хост, у нас все локально
$user = 'root'; // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'form'; // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);
$connect = new mysql_connection;

class mysql_connection{

    function stmt_execute_close($val)
    {
        mysqli_stmt_execute($val);
        mysqli_stmt_close($val);
    }
}
function new_post($user, $topic, $message, $email, $date){
    global $link, $connect;
    $sql = mysqli_prepare($link, "INSERT INTO `topics` (`user`, `topic`, `message`, `email`, `date`) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($sql, 'sssss', $user, $topic, $message, $email, $date);
    $connect -> stmt_execute_close($sql);
}

function update_post($user, $topic, $message, $email, $date, $id_post){
    global $link, $connect;
    $update_post_stmt =  mysqli_prepare($link, "   UPDATE `topics` SET `user`=?, `topic`=?, `message`=?, `email`=?, `date`=? WHERE `id` =?");
    mysqli_stmt_bind_param($update_post_stmt, 'sssssi', $user, $topic, $message, $email, $date, $id_post);
    $connect -> stmt_execute_close(update_post_stmt);
}
function views_stmt($idviews){
    global $link, $connect;
    $views_stmt = mysqli_prepare($link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` =?");
    mysqli_stmt_bind_param($views_stmt, 'i',  $idviews );
    $connect -> stmt_execute_close($views_stmt);
}
function topic ($topic_email, $topic_message, $topics_id,$topic_user, $date_comments){
    global $link, $connect;
    $comments_stmt = mysqli_prepare($link, "INSERT INTO `comments` (`email_comments`, `message_comments`,`user`, `topics_id`, `date_comments` ) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($comments_stmt, 'sssis', $topic_email, $topic_message,$topic_user, $topics_id, $date_comments);
    $connect-> stmt_execute_close($comments_stmt);
}

function update_topic ($topic_email, $topic_message, $topics_id,$topic_user, $date_comments){
    global $link, $connect;
    $comments_stmt = mysqli_prepare($link, "INSERT INTO `comments`SET`email_comments`=?, `message_comments`=?,`user`=?, `topics_id`=?, `date_comments`=?  WHERE `id` =?");
    mysqli_stmt_bind_param($comments_stmt, 'sssis', $topic_email, $topic_message, $topics_id,$topic_user, $date_comments);
    $connect-> stmt_execute_close($comments_stmt);
}
