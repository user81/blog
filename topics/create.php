<?php
require('../includes/conect_sql.php');
require('../includes/email.php');
require('../includes/page-errors.php');
require ('../classes/Topic.php');

$success = false;
$errors = [];
$connection = new sql_errors();
$connection ->sql_connection();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $date = date("Y-m-d");
//     if (isset($_POST["email"]) && isset($_POST["topic"]) && isset($_POST["message"])) {

//         $new_topic = new Topic();
//         $new_topic ->new_topic($_POST["user"],$_POST["topic"], $_POST["message"], $_POST["email"], $date);
//         send_mail( $_POST["email"],$_POST["topic"],$_POST["message"]);
//          header('Location: ../topics/list.php');
// }
//     if ($link) {
//         $success = true;
//     } else {
//         $errors = 'ошибка';
//     }
// }

$new_topic = new Topic($_POST["user"],$_POST["topic"], $_POST["email"], $_POST["message"], $date);

if ($new_topic->validate()) {
    $new_topic->save();
    send_mail( $_POST["email"],$_POST["topic"],$_POST["message"]);
    // header('Location: ../topics/list.php');
} else {
   echo $errors = 'ошибка';
}
}

    ?>


<html>
<body>
<?php require ('../includes/page-head.php'); ?>
<form method='POST'  class='form'>
    <h1>Добавить сообщение</h1>
    <?php if ($success): ?>
        <div class="success">Сообщение успешно отправлено!</div>
    <?php elseif ($errors): ?>
        <div class="errors">Невозможно сохранить форму. Исправьте ошибки и попробуйте ещё раз.</div>
    <?php endif; ?>

    <label class='label' for='form_user'>Автор:</label>
    <div class="form_validate">
        <input type="text" name='user' placeholder='Имя*' id='form_user' maxlength='255' required='true'/>
    </div>
    <label class='label' for='form_theme'>Тема сообщения:</label>
    <div class="form_validate">
        <input type="text" name='topic' placeholder='Тема*' id='form_theme' maxlength='255' required='true'/>
    </div>
    <label for="e-mail_theme">Электронная почта:</label>
    <div class="form_validate">
        <input type='email' name="email" id='e-mail_theme' placeholder="E-Mail"/>
    </div>

    <label for='form_message'>Текст сообщения: </label>
    <div class="form_validate">
        <textarea type='text' id='form_message' maxlength='1024' name='message' rows='20' required='true'></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>
</body>
</html>



