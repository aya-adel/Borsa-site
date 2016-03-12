<?php

$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'admin';
$conn = mysql_connect( $dbhost,$dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql='select id from  data ';
 mysql_select_db('borsa');
$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$data2=[];

while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    
$data2[]= $row[0];

}


$ss=sizeof($data2);
for($s=0;$s<$ss;$s++)
{

$sql = "SELECT share_id from user_share where user_id='$data2[$s]'";
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$data=[];
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    
$data[]= $row[0];

}


$i=sizeof($data);
//echo $i;
//echo $data[0];
for($w=0;$w<$i;$w++)
{

$sql=" select * from user_share where user_id='$data2[$s]' and share_id='$data[$w]' " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
$wantedprice= $row['wPrice']; 
      $state=$row['above'];
      $enablestate=$row['flag'];

}
echo('<br>'."wantedprice".$wantedprice.'</br>');
echo('<br>'."state".$state.'</br>');
echo('<br>'."stateenable".$enablestate.'</br>');

////////////////////////////////////////////////////
$currentprice=0;
$sql=" select * from Share where id='$data[$w]' " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
   $currentprice= $row['price'];


}

  echo $currentprice ;

///////////////////////////////////////////////


 
$t=time();
    //echo(date("Y-m-d",$t));
    $currentdate=date("Y-m-d",$t);
    //echo $currentdate;


if($state==1 && $enablestate==1)
{

    if($currentprice>$wantedprice)
         {
            

$sql=" select * from user_share where user_id=$data2[$s] and share_id='$data[$w]' " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
   $lastcheck= $row['lastcheck']; 

}

 
echo $lastcheck;
////////////////////////////



 if($currentdate!=$lastcheck)
{

echo "el sahm zad";

$sql=" UPDATE user_share SET lastcheck='$currentdate' WHERE user_id=$data2[$s] and share_id='$data[$w]' " ;

mysql_select_db('borsa');
$retval = mysql_query( $sql, $conn);
 


////////////////////////////////////


$email="";


$sql=" select * from data where id=$data2[$s] " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
     $email= $row['email'];
}



       //sendemailcode 
      //echo $email;
      $to = $email;
      $subject = "subject" ;
      $body = "<div> check your account</div>";

      $headers = 'From: YourLogoName info@domain.com' . "\r\n" ;
      $headers .='Reply-To: '. $to . "\r\n" ;
      $headers .='X-Mailer: PHP/' . phpversion();
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
      $headers .= "X-Priority: 3\r\n";
      if(mail($to, $subject, $body,$headers)) {
         echo('<br>'."Email Sent ;D ".'</br>');
                                              } 
        else 
          {
              echo("<p>Email Message delivery failed...</p>");
          }      
 //end sendmailcode



}

}

}


//////////////////////////////////////////////////////////////////////////////////////////




$t=time();
    //echo(date("Y-m-d",$t));
    $currentdate=date("Y-m-d",$t);
    //echo $currentdate;


if($state==0 && $enablestate==1)
{

    if($currentprice<$wantedprice)
         {
            

$sql=" select * from user_share where user_id=$data2[$s] and share_id='$data[$w]' " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
   $lastcheck= $row['lastcheck']; 

}

 
echo $lastcheck;
////////////////////////////



 if($currentdate!=$lastcheck)
{

echo "el sahm zad";

$sql=" UPDATE user_share SET lastcheck='$currentdate' WHERE user_id=$data2[$s] and share_id='$data[$w]' " ;

mysql_select_db('borsa');
$retval = mysql_query( $sql, $conn);
 


////////////////////////////////////


$email="";


$sql=" select * from data where id=$data2[$s] " ;
mysql_select_db('borsa');

$retval = mysql_query( $sql, $conn);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval,  MYSQL_ASSOC))
{
    
     $email= $row['email'];
}



       //sendemailcode 
      //echo $email;
      $to = $email;
      $subject = "subject" ;
      $body = "<div>check your account </div>";

      $headers = 'From: YourLogoName info@domain.com' . "\r\n" ;
      $headers .='Reply-To: '. $to . "\r\n" ;
      $headers .='X-Mailer: PHP/' . phpversion();
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
      $headers .= "X-Priority: 3\r\n";
      if(mail($to, $subject, $body,$headers)) {
         echo('<br>'."Email Sent ;D ".'</br>');
                                              } 
        else 
          {
              echo("<p>Email Message delivery failed...</p>");
          }      
 //end sendmailcode



}

}

}














}




}


































?>














 
