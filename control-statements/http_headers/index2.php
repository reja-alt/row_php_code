<?php
// PHP program to describes header function
  
// Redirect the browser
// header("Location: https://code-boxx.com/simple-php-mvc-example/");

// Set a past date
// header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");
  
// This example illustrates the "HTTP/" special case
// Better alternatives in typical use cases include:
// 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
//    (to override http status messages for clients that are still using HTTP/1.0)
// 2. http_response_code(404); (to use the default message)
// header("HTTP/1.1 404 Not Found");

header('WWW-Authenticate: Negotiate');
header('WWW-Authenticate: NTLM',true);

// The below code does not get executed 
// while redirecting
  
?>

<html>
    <body>
        <p>Hello World!</p>
      
        <!-- PHP program to display
        header list -->
        <?php
            echo "<pre>";
            print_r(headers_list());
            echo "</pre>"
        ?>
    </body>
</html>