<?php
session_start();
if(isset($_GET['logout'])) {
        session_destroy();
    }
include ('config.php');

if (isset($_POST['login'])&&isset($_POST['login_email'])&&isset($_POST['login_passwd'])) {
    $link = mysqli_connect(
            $config['server'], $config['username'], $config['passoword'], $config['database']);

    if (!$link) {
        echo " error :unable " . mysqli_connect_error();
    }
    
    
   
    $email=$_POST['login_email'];
    $passwd=$_POST['login_passwd'];

    

    $user = mysqli_query($link,"select * from data where email ='".$email."' and passwd= '".$passwd."' ;");
    $data = mysqli_fetch_assoc($user);
if($data!=null) {
    //echo $data["username"];
        $_SESSION['user_id'] = $data["id"];
        //echo $_SESSION['user_id'];

        header('Location: blog.html');

    } else {
        //echo "string";
        $_SESSION['faild_login'] = "Wrong Email or Password";
        header('Location: index.html');
    }

}
?>