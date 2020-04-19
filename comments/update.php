<?php
require('../includes/conect_sql.php');
require ('../includes/page-errors.php');

$success = false;
$errors = [];
$connection = new sql_errors();
$connection ->sql_connection();

$coment = mysqli_query($link, "SELECT `user`, `email_comments`, `message_comments`, `topics_id`  FROM `comments` WHERE `id` = '{$_GET["id"]}'");
$row = mysqli_fetch_row($coment);
if ($_SERVER['REQUEST_METHOD'] === 'POST'):
if (isset($_POST["topic_message"]) && isset($_POST["topic_email"])&& isset($_POST["topic_user"])){
    update_comments( $_POST["topic_user"], $_POST["topic_email"], $_POST["topic_message"], $_GET["id"]);

}
   header('Location: ../topics/read.php?id=' . $row[3]);
?>
<?php endif; ?>

<html>
<body>
<?php require ('../includes/page-head.php'); ?>
<form method='POST'  class='form'>
    <h1>Изменить сообщение</h1>


    <form method='POST' class='form'>
        <label for="topic_user">Имя  прользователя:</label>
        <div class="form_validate">
            <input type="text" name='topic_user' placeholder='Имя*' id='topic_user' maxlength='255' value="<?php echo "$row[0] "; ?>" required='true'/>
        </div>
    <label for="e-mail_topic">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="topic_email" id='e-mail_topic' placeholder="E-Mail"  value="<?php echo "$row[1] "; ?>" required='true'/>
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='topic_message' rows='20'
                  required='true'><?php echo "$row[2] ";  ?></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>

    </body>
</html>