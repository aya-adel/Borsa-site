<?php
$user="root";
$password="hggih;fv";
$host="localhost";
$database="borsa";
$link=mysqli_connect($host,$user,$password,$database);
if($link->connect_errno)
{
    echo "Error:couldnot connect to database";
    exit();
}
else {
$sql="insert into temp_price select * from Share";
mysqli_query($link,$sql);   
}
?>