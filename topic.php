<?php
require('conect_sql.php');
sql_connection();
$date= date("Y-m-d");
mysqli_query($link, "UPDATE `message_list` SET `views`=`views`+1 WHERE `id` = '{$_GET["id"]}'");
$topic = mysqli_query($link, "SELECT `topic`, `user`, `date`, `message`,`views` FROM `message_list` WHERE `id` = '{$_GET["id"]}'");
if (isset($_POST["topic_message"]) && isset($_POST["topic_email"]) && $link) {
$comments = mysqli_prepare($link, "INSERT INTO `comments` (`message_comments`, `email_comments`, `id_message_list`, `id` ) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($comments, 'ssis',   $_POST["topic_message"], $_POST["topic_email"],$_GET["id"], $date);
    mysqli_stmt_execute($comments);
    mysqli_stmt_close($comments);
   /* header('Location: /topic.php?id=' . $_GET['id']);*/
    mysqli_query($link, "UPDATE `message-list` SET `views`=`views`-1 WHERE `id` = '{$_GET["id"]}'");
    header("Location: /topic.php?id={$_GET['id']}");
}
$display_comments = mysqli_query($link, "SELECT `date_comments`,`email_comments`,  `message_comments`  FROM `comments` WHERE `id_message_list` = '{$_GET["id"]}'");
$rows_comments = mysqli_num_rows($display_comments);
?>
    <html>
    <head>
        <meta charset="UTF-8"/>
    </head>

    <body>
    <table>
        <tr>
            <th>Topic</th>
            <th>User</th>
            <th>Date</th>
            <th>message</th>
            <th>Views</th>
        </tr>
            <?$row = mysqli_fetch_row($topic);?>
            <tr>
                <?php for ($j = 0; $j < 5; ++$j): ?>
                    <td><?=$row[$j]?></td>
                <?php endfor;?>
            </tr>
    </table>
    <form method='POST' location.href='topic.php' class='form' >

        <label for="e-mail_topic">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="topic_email" id='e-mail_topic'  placeholder="E-Mail" required='true' />
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='topic_message' rows='20' required='true'></textarea>
    </div>
        <button type="submit" >Отправить</button>
    </form>

    <table>
        <tr>
            <th>Data</th>
            <th>email</th>
            <th>message</th>
        </tr>
        <?php for ($i = $rows_comments; $i != 0; --$i):
            $row = mysqli_fetch_row($display_comments);?>
            <tr>
                <td><?=$row[0]?></td>
                <td><?=$row[1]?></td>
                <td><?=$row[2]?></td>
            </tr>
        <?php endfor; ?>
    </table>
    </html>

<?php
mysqli_close($link);
?>
