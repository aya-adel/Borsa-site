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
    
    
    $name=trim($_POST['reg_name']);
    $email=trim($_POST['reg_email']);
    $rpasswd=trim($_POST['reg_repass']);
     $passwd=trim($_POST['reg_pass']);
     
  

if(preg_match('/^[a-z ]{3,50}$/i', $name)&&preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        
        if($passwd == $rpasswd )
        {
    $user = mysqli_query($link, "insert into data (name,email,passwd) values( '" .  $name . "' , '" . $email. "' ,'" . $passwd . "')");
    header('Location: index3.html');
    //echo $user;
    if($user) {
    //echo $data["username"];
        echo " ana gwa if";
        $_SESSION['user_id'] = $data["id"];
        //echo $_SESSION['user_id'];
        
    }
        

}   

else    
{
    echo "not matched password ";
}
}

else {
    $_SESSION['faild_login'] = "Wrong Email or Password";
        header('Location: index.html');
   
}
     


}
?>