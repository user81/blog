<?php
$host = '127.0.0.1'; // Хост, у нас все локально
$user = 'root'; // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'form'; // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
}
$date= date("Y-m-d");
mysqli_query($link, "UPDATE `message-list1` SET `views`=`views`+1 WHERE `id` = '{$_GET["id"]}'");
$mesage = mysqli_query($link, "SELECT `topic`, `user`, `date`, `message`,`views` FROM `message-list1` WHERE `id` = '{$_GET["id"]}'");

if (isset($_POST["message1"]) && isset($_POST["e-mail1"]) && $link) {
$comments = mysqli_query($link, "INSERT INTO `comments` (`message-comments`, `email-comments`, `id`, `date-comments` ) VALUES ( '{$_POST["message1"]}', '{$_POST["e-mail1"]}','{$_GET["id"]}', '{$date}')");
    unset($_POST);
}


$display_comments = mysqli_query($link, "SELECT `date-comments`,`email-comments`,  `message-comments`  FROM `comments` WHERE `id` = '{$_GET["id"]}'");

$rows_comments = mysqli_num_rows($display_comments);

?>

    <html>
    <head>
        <meta charset="UTF-8"/>
    </head>

    <body>
    <table>
        <tr>
            <th>Заголовок</th>
            <th>User</th>
            <th>Date</th>
            <th>message</th>
            <th>Views</th>
        </tr>

            <?
            $row = mysqli_fetch_row($mesage);?>
            <tr>
                <?php for ($j = 0; $j < 5; ++$j): ?>
                    <td><?=$row[$j]?></td>
                <?php endfor;?>
            </tr>

    </table>
    <form method='POST' location.href='new-post.php' class='form' >

        <label for="e-mail_theme">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="e-mail1" id='e-mail_theme'  placeholder="E-Mail"  />
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='message1' rows='20' required='true'></textarea>
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

                <?php  ?>
            </tr>

        <?php endfor; ?>
    </table>
    </html>

<?php
mysqli_close($link);
?>



