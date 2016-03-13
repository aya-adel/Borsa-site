<?php
// INIT CURL
$ch = curl_init();

$postData = array(
    'login_email' => 'amira@yahoo.com',
    'login_passwd' => '12345',
    'login' => true,
    //'redirect_to' => 'http://localhost/php-project/Borsa-site/index1.php',
    'testcookie' => '1'
);

curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://localhost/php-project/Borsa-site/index1.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => 'login_email=amira@yahoo.com&login_passwd=12345&login=true',
    CURLOPT_FOLLOWLOCATION => true
));

$output = curl_exec($ch);
echo $output;
