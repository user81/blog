<?php
class Topic
{
    //private можно получить доступ только из того класса вкотором объявлены
    //переменные - атрибуты, поля, свойства
    //методы - function()
    private const DATABASE_HOST = '127.0.0.1';
    private const DATABASE_USER = 'root';
    private const DATABASE_PASSWORD = '';
    private const DATABASE_NAME = 'form';

    private $database_link;

    public $user;
    public  $topic;
    public  $email;     
    public  $message;
    public  $date;  
  
    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
    public function __construct1(){
        $this->database_link = mysqli_connect(Topic::DATABASE_HOST, Topic::DATABASE_USER, Topic::DATABASE_PASSWORD, Topic::DATABASE_NAME);
        
    }
    public function __construct2($user, $topic, $email, $message, $date)
    {
    
        $this -> user = $user;
        $this -> topic = $topic;
        $this -> email = $email;
        $this -> message = $message;
        $this -> date = $date;
    }

    public function __destruct()
    {
        // Проверяем, что соединение установлено успешно (атрибут инициализирован и не FALSE)
        if (isset($this->database_link) and $this->database_link) {
            // Закрываем соединение
            mysqli_close($this->database_link);
        }
    }

/*    function topic($topic_user, $topic_email, $topic_message, $topics_id, $date_comments)
    {
        $connect = new mysql_connection;
        $comments_stmt = mysqli_prepare($this->database_link, "INSERT INTO `comments` (`user`, `email_comments`, `message_comments`, `topics_id`, `date_comments`) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($comments_stmt, 'sssis', $topic_user, $topic_email, $topic_message, $topics_id, $date_comments);
        $connect->stmt_execute_close($comments_stmt);
    }

    function update_topic($topic_user, $topic_email, $topic_message, $topics_id)
    {
        $connect = new mysql_connection;
        $update_post_stmt = mysqli_prepare($this->database_link, "UPDATE `comments` SET `email_comments`=?, `message_comments`=?, `user`=? WHERE `id` =?");
        mysqli_stmt_bind_param($update_post_stmt, 'sssi', $topic_email, $topic_message, $topic_user, $topics_id);
        $connect->stmt_execute_close($update_post_stmt);
    }

    function delete( $topics_id)

    {
        $connect = new mysql_connection;
        $delete_post_stmt = mysqli_prepare($this->database_link, "DELETE FROM `comments` WHERE `id` =?");
        mysqli_stmt_bind_param($delete_post_stmt, 'i',  $topics_id);
        $connect->stmt_execute_close($delete_post_stmt);
    }*/


    function validate(){
        if (isset($email) && isset($topic) && isset($message)){
        }
            if ($this -> database_link) {
                return  $success = true;
            }
    }
    

    function save(){
        echo $this->user;
        $connect = new mysql_connection;
        $sql = mysqli_prepare($this->database_link, "INSERT INTO `topics` (`user`, `topic`, `message`, `email`, `date`) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($sql, 'sssss', $user, $topic, $message, $email, $date);
        $connect -> stmt_execute_close($sql);
       
    }


    function update_topic($user, $topic, $message, $email,  $topics_id){

        $connect = new mysql_connection;
        $update_post_stmt = mysqli_prepare($this->database_link, "UPDATE `topics` SET `user`=?, `topic`=?, `message`=?, `email`=? WHERE `id` =?");
        mysqli_stmt_bind_param($update_post_stmt, 'ssssi', $user, $topic, $message, $email,  $topics_id);
        $connect -> stmt_execute_close($update_post_stmt);
    }



    function delete_toppic( $topics_id) {

        $connect = new mysql_connection;
        $delete_toppic_stmt = mysqli_prepare($this->database_link, "DELETE FROM `topics` WHERE `id` =?");
        mysqli_stmt_bind_param($delete_toppic_stmt, 'i',  $topics_id);
        $connect->stmt_execute_close($delete_toppic_stmt);

    }
    function uviews_stmt($iduviews){

        $connect = new mysql_connection;
        $views_stmt = mysqli_prepare($this->database_link, "UPDATE `topics` SET `uviews`=`uviews`+1 WHERE `id` =?");
        mysqli_stmt_bind_param($views_stmt, 'i',  $iduviews );
        $connect -> stmt_execute_close($views_stmt);
    }

    function views_stmt( $latest_view, $idviews){

        $connect = new mysql_connection;
        $views_stmt = mysqli_prepare($this->database_link, "UPDATE `topics` SET `views`=`views`+1, `latest_view`=?  WHERE `id` =?");
        mysqli_stmt_bind_param($views_stmt, 'si',$latest_view,  $idviews );
        $connect -> stmt_execute_close($views_stmt);
    }
    //список всех сообщений
     function findAll() {

        $topics = mysqli_query($this->database_link, "SELECT `id`, `date`, `user`, `topic`   FROM `topics` ORDER BY `id` DESC");
        
        $rows_count = mysqli_num_rows($topics);

        for ($i = $rows_count; $i != 0; --$i) {
            yield mysqli_fetch_row($topics);
        }
    }

    function findById($id_topic) {

        // $toppic = mysqli_query($this->database_link, "SELECT `topic`, `user`, `date`, `message`,`views`,`uviews`, `email` FROM `topics` WHERE `id` =$id_topic");
        // return $toppic;

        $topics = mysqli_query($this->database_link, "SELECT `id`, `date`, `user`, `topic`   FROM `topics` ORDER BY `id` DESC");
        $rows_count = mysqli_num_rows($topics);

        for ($i = $rows_count; $i != 0; --$i) {
            yield mysqli_fetch_row($topics);
        }
    
    
    
    }
    
}

 


 