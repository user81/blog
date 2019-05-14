<?php


if (isset($_POST["topic_message"]) && isset($_POST["topic_email"])&& isset($_POST["topic_user"])){
    topic($_POST["topic_email"], $_POST["topic_message"], $_POST["topic_user"], $_GET["id"], $date);
}
?>
<form method='POST' class='form'>
    <label for="topic_user">Имя  прользователя:</label>
    <div class="form_validate">
        <input type="text" name='user' placeholder='Имя*' id='topic_user' maxlength='255' required='true'/>
    </div>
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



