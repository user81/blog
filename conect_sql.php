<?php
$host = '127.0.0.1'; // Хост, у нас все локально
$user = 'root'; // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'form'; // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);


class mysql_connection{
    function sql_connection()
    {
        if (mysqli_connect_errno()) {
            printf("Соединение не установлено: %s\n", mysqli_connect_error());
            die();
        }
    }
    function stmt_execute_close($val)
    {
        mysqli_stmt_execute($val);
        mysqli_stmt_close($val);
    }


}
function new_post($user, $topic, $message, $email, $date){
    global $link, $sql;
    $connect = new mysql_connection;
    $sql = mysqli_prepare($link, "INSERT INTO `topics` (`user`, `topic`, `message`, `email`, `date`) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($sql, 'sssss', $user, $topic, $message, $email, $date);
    $connect -> stmt_execute_close($sql);
}


