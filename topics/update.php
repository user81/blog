<?php
require('../includes/conect_sql.php');
require('../includes/email.php');
require('../includes/page-errors.php');
require ('../classes/Topic.php');
$success = false;
$errors = [];
$connection = new sql_errors();
$connection ->sql_connection();

$find_topic = new Topic();
$topic = $find_topic->findById($_GET["id"]);
$row = mysqli_fetch_row($topic);

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    if (isset($_POST["email"]) && isset($_POST["topic"]) && isset($_POST["message"]) && isset($_GET["id"])) {

        $update_topic =new Topic();
        $update_topic -> update_topic($_POST["user"],$_POST["topic"], $_POST["message"], $_POST["email"], $_GET["id"]);

        send_mail( $_POST["email"],$_POST["topic"],$_POST["message"]);
        header('Location: ../topics/list.php');
    }
    ?>
<?php endif; ?>

<html>
<body>
<?php require ('../includes/page-head.php'); ?>
<form method='POST'  class='form'>
    <h1>Изменить сообщение</h1>


    <label class='label' for='form_user'>Автор:</label>
    <div class="form_validate">
        <input type="text" name='user' placeholder='Имя*' id='form_user' maxlength='255' value="<?= $row[1] ?>" required='true'/>
    </div>
    <label class='label' for='form_theme'>Тема сообщения:</label>
    <div class="form_validate">
          <input type="text" name='topic' placeholder='Тема*' id='form_theme' maxlength='255' value="<?php echo "$row[0] "; ?>" required='true'/>
    </div>
    <label for="e-mail_theme">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="email" id='e-mail_theme' placeholder="E-Mail" value="<?php echo "$row[6] "; ?>"/>
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='message' rows='20'  required='true'><?php echo "$row[3] ";  ?></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>

</body>
</html>
