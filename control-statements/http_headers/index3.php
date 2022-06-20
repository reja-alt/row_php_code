<?php
// // We'll be outputting a PDF
// header('Content-Type: application/pdf');

// // It will be called downloaded.pdf
// header('Content-Disposition: attachment; filename="downloaded1.pdf"');

// header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
// header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

header( "refresh:5;url=https://code-boxx.com/simple-php-mvc-example/");
echo 'You\'ll be redirected in about 5 secs. If not, click <a href="https://code-boxx.com/simple-php-mvc-example/">here</a>.';

// The PDF source is in original.pdf
// readfile('original.pdf');
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