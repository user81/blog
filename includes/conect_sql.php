<?php
$host = '127.0.0.1'; // Хост, у нас все локально
$user = 'root'; // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'form'; // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);


class mysql_connection{

    function stmt_execute_close($val)
    {
        mysqli_stmt_execute($val);
        mysqli_stmt_close($val);
    }
}

function new_post($user, $topic, $message, $email, $date){
    global $link;
    $connect = new mysql_connection;
    $sql = mysqli_prepare($link, "INSERT INTO `topics` (`user`, `topic`, `message`, `email`, `date`) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($sql, 'sssss', $user, $topic, $message, $email, $date);
    $connect -> stmt_execute_close($sql);
}

function update_post($user, $topic, $message, $email, $id_post){
    global $link;
    $connect = new mysql_connection;
    $update_post_stmt = mysqli_prepare($link, "UPDATE `topics` SET `user`=?, `topic`=?, `message`=?, `email`=? WHERE `id` =?");
    mysqli_stmt_bind_param($update_post_stmt, 'ssssi', $user, $topic, $message, $email, $id_post);
    $connect -> stmt_execute_close($update_post_stmt);
}

function uviews_stmt($iduviews){
    global $link;
    $connect = new mysql_connection;
    $views_stmt = mysqli_prepare($link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` =?");
    mysqli_stmt_bind_param($views_stmt, 'i',  $iduviews );
    $connect -> stmt_execute_close($views_stmt);
}

function views_stmt( $latest_view, $idviews){
    global $link;
    $connect = new mysql_connection;
    $views_stmt = mysqli_prepare($link, "UPDATE `topics` SET `views`=`views`+1, `latest_view`=?  WHERE `id` =?");
    mysqli_stmt_bind_param($views_stmt, 'si',$latest_view,  $idviews );
    $connect -> stmt_execute_close($views_stmt);
}

function topic($topic_user, $topic_email, $topic_message, $topics_id, $date_comments){
    global $link;
    $connect = new mysql_connection;
    $comments_stmt = mysqli_prepare($link, "INSERT INTO `comments` (`user`, `email_comments`, `message_comments`, `topics_id`, `date_comments`) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($comments_stmt, 'sssis', $topic_user, $topic_email, $topic_message, $topics_id, $date_comments);
    $connect -> stmt_execute_close($comments_stmt);
}


function update_topic ($topic_user, $topic_email, $topic_message,  $topics_id){
    global $link;
    $connect = new mysql_connection;
    $update_post_stmt = mysqli_prepare($link, "UPDATE `comments` SET `email_comments`=?, `message_comments`=?, `user`=? WHERE `id` =?");
    mysqli_stmt_bind_param($update_post_stmt, 'sssi', $topic_email, $topic_message, $topic_user, $topics_id);
    $connect -> stmt_execute_close($update_post_stmt);
}
