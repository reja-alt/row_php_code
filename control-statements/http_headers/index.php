<?php
 
$value = curl_init('https://code-boxx.com/simple-php-mvc-example/');
 
curl_setopt($value, CURLOPT_HTTPHEADER, array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0",
    "Accept-Language: en-US,en;q=0.5"
));
 
curl_setopt($value, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($value);
 
curl_close($value);
 
echo $output;
?>