<?php
require('conect_sql.php');
$conect = new mysql_connection;
$conect->sql_connection();
$date = date("Y-m-d");
$hour = 3600;
$time = $hour + time();
if (!isset($_COOKIE["hash"])) {
    $hash = "visit";
    setcookie("hash", $hash, $time, "topic.php");
   /* mysqli_query($link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` = '{$_GET["id"]}'");*/
    $uviews_stmt = mysqli_prepare($link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` =?");
    mysqli_stmt_bind_param($uviews_stmt, 'i',  $_GET["id"]);
    $conect-> stmt_execute_close($uviews_stmt);
}
if (isset($_GET["redirect"]) || !isset($_POST["topic_message"]) && !isset($_POST["topic_email"])) {
  /*  mysqli_query($link, "UPDATE `topics` SET `views`=`views`+1 WHERE `id` = '{$_GET["id"]}'");*/
    $views_stmt = mysqli_prepare($link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` =?");
    mysqli_stmt_bind_param($views_stmt, 'i',  $_GET["id"]);
    $conect-> stmt_execute_close($views_stmt);
}
$topic = mysqli_query($link, "SELECT `topic`, `user`, `date`, `message`,`views`,`uviews` FROM `topics` WHERE `id` = '{$_GET["id"]}'");
if (isset($_POST["topic_message"]) && isset($_POST["topic_email"])) {
    $comments_stmt = mysqli_prepare($link, "INSERT INTO `comments` (`email_comments`, `message_comments`, `topics_id`, `date_comments` ) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($comments_stmt, 'ssis', $_POST["topic_email"], $_POST["topic_message"], $_GET["id"], $date);
    $conect-> stmt_execute_close($comments_stmt);
    header("Location: /topic.php?id={$_GET['id']}");
    /* header('Location: /topic.php?id=' . $_GET['id']);*/
}
$display_comments = mysqli_query($link, "SELECT `date_comments`,`email_comments`,  `message_comments`  FROM `comments` WHERE `topics_id` = '{$_GET["id"]}'");
$comments = mysqli_num_rows($display_comments);
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

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

<form method='POST' class='form'>

    <label for="e-mail_topic">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="topic_email" id='e-mail_topic' placeholder="E-Mail" required='true'/>
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='topic_message' rows='20'
                  required='true'></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>

<table>
    <tr>
        <th>Дата</th>
        <th>Email</th>
        <th>Сообщение</th>
    </tr>
    <?php for ($i = $comments; $i != 0; --$i):
        $row = mysqli_fetch_row($display_comments); ?>
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
