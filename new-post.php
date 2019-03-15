<?php
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

    require('conect_sql.php');


     $date= date("Y-m-d");
    if (isset($_POST["e-mail"]) && isset($_POST["topic"]) && isset($_POST["message"]) && $link) {
    $sql = mysqli_prepare($link, "INSERT INTO `message_list` (`user`, `topic`, `message`, `email`, `date`) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($sql, 'sssss',  $_POST["user"], $_POST["topic"], $_POST["message"], $_POST["email"], $date);
        mysqli_stmt_execute($sql);
        mysqli_stmt_close($sql);
       header('Location: /post.php');

    }
    if($sql && $link){
        $success=true;
    }else{
        $errors='ошибка';
    }

    ?>

<?php endif;?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Demo Application</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
    <form method='POST' location.href='new-post.php' class='form' >
        <h1>Добавить сообщение</h1>

        <?php if ($success): ?>
            <div class="success">Сообщение успешно отправлено!</div>
        <?php elseif ($errors): ?>
            <div class="errors">Невозможно сохранить форму. Исправьте ошибки и попробуйте ещё раз.</div>
        <?php endif;?>

        <label class='label' for='form_user'>Автор:</label>
        <div class="form_validate" >
            <input type="text" name='user' placeholder='Имя*' id='form_user' maxlength='255' required='true'/>
        </div>
        <label class='label' for='form_theme'>Тема сообщения:</label>
        <div class="form_validate" >
            <input type="text" name='topic' placeholder='Тема*' id='form_theme' maxlength='255' required='true'/>
        </div>
        <label for="e-mail_theme">Электронная почта:</label>
        <div class="form_validate">
            <input type='email' name="email" id='e-mail_theme'  placeholder="E-Mail"  />
        </div>

        <label for='form_message'>Текст сообщения: </label>
        <div class="form_validate">
            <textarea type='text' id='form_message' maxlength='1024' name='message' rows='20' required='true'></textarea>
        </div>

        <button type="submit" >Отправить</button>

    </form>

</body>
</html>


