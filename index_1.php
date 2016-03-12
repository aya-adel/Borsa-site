<?php
session_start();
   if(isset($_GET['logout'])) {
        session_destroy();
    }
   if(!isset($_SESSION['user_id'])) header('Location: index.html');

include ('config.php');

if (isset($_POST['reg'])&&isset($_POST['reg_name'])&&isset($_POST['reg_email'])&&isset($_POST['reg_pass'])&&isset($_POST['reg_repass'])) {
    $link = mysqli_connect(
            $config['server'], $config['username'], $config['passoword'], $config['database']);

    if (!$link) {
        echo " error :unable " . mysqli_connect_error();
    }
    
    
    $name=$_POST['reg_name'];
    $email=$_POST['reg_email'];
    $passwd=$_POST['reg_repass'];


    $user = mysqli_query($link, "insert into data (name,email,passwd) values( '" .  $name . "' , '" . $email. "' ,'" . $passwd . "')");
    if ($user) {
        echo "l2ha ";
    }

}
?>