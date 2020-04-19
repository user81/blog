<?php
class sql_errors{
function sql_connection()
{
    if (mysqli_connect_errno()) {
        printf("Соединение не установлено: %s\n", mysqli_connect_error());
        die();
    }
}

}
