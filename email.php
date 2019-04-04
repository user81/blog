<?php
function send_mail($email,$topic,$message){
    $headers = "Content-type: text/php; charset=UTF-8" . "\r\n";
    $headers .= "From: <from@blog.com>" . "\r\n";
    $headers .= "Reply-To: from@blog.com" . "\r\n";
    mail($email, $topic, $message, $headers);
}
