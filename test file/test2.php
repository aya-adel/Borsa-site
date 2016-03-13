

<?php

//The username or email address of the account.
define('USERNAME', 'amira@yahoo.com');

//The password of the account.
define('PASSWORD', '12345');

//Set a user agent. This basically tells the server that we are using Chrome ;)
define('USER_AGENT', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.2309.372 Safari/537.36');



//URL of the login form.
define('LOGIN_FORM_URL', 'http://localhost/php-project/Borsa-site/index.html');

//Login action URL. Sometimes, this is the same URL as the login form.
define('LOGIN_ACTION_URL', 'http://localhost/php-project/Borsa-site/index1.php');


//An associative array that represents the required form fields.
//You will need to change the keys / index names to match the name of the form
//fields.
$postValues = array(
    'login'=> true,
    'login_email' => USERNAME,
    'login_passwd' => PASSWORD,
    

);

//Initiate cURL.
$curl = curl_init();

//Set the URL that we want to send our POST request to. In this
//case, it's the action URL of the login form.
curl_setopt($curl, CURLOPT_URL, LOGIN_ACTION_URL);

//Tell cURL that we want to carry out a POST request.
curl_setopt($curl, CURLOPT_POST, true);

//Set our post fields / date (from the array above).
curl_setopt($curl, CURLOPT_POSTFIELDS, 'login_email=amira@yahoo.com&login_passwd=12345&login=true');

//We don't want any HTTPS errors.
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);



//Sets the user agent. Some websites will attempt to block bot user agents.
//Hence the reason I gave it a Chrome user agent.
curl_setopt($curl, CURLOPT_USERAGENT, USER_AGENT);

//Tells cURL to return the output once the request has been executed.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//Allows us to set the referer header. In this particular case, we are 
//fooling the server into thinking that we were referred by the login form.
curl_setopt($curl, CURLOPT_REFERER, LOGIN_FORM_URL);

//Do we want to follow any redirects?
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, 'http://localhost/php-project/Borsa-site/blog.html');
//Execute the login request.
curl_exec($curl);

//Check for errors!
if(curl_errno($curl)){
    throw new Exception(curl_error($curl));
}

//We should be logged in by now. Let's attempt to access a password protected page
//curl_setopt($curl, CURLOPT_URL, 'http://localhost/php-project/Borsa-site/blog.html');



//Use the same user agent, just in case it is used by the server for session validation.
curl_setopt($curl, CURLOPT_USERAGENT, USER_AGENT);

//We don't want any HTTPS / SSL errors.
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

//Execute the GET request and print out the result.
echo curl_exec($curl);
