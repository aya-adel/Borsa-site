<?php

include ('config.php');

if (isset($_POST['login'])&&isset($_POST['login_email'])&&isset($_POST['login_passwd'])) {
    $link = mysqli_connect(
            $config['server'], $config['username'], $config['passoword'], $config['database']);

    if (!$link) {
        echo " error :unable " . mysqli_connect_error();
    }
    
    echo " m7md";
    
   
    $email=$_POST['login_email'];
    $passwd=$_POST['login_passwd'];


    $user = mysqli_query($link,"select * from data where email ='".$email."' and passwd= '".$passwd."' ;");
    if ($user) {
        echo "l2ha ";
    }
    
    
     while ($row = mysqli_fetch_assoc($user)) {

           
            echo $row['email'] ;
           
        header("http://localhost/borsa/index2.html");


       
    }

}
?>