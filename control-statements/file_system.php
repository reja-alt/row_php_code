<?php
    $dir = scandir(__DIR__);
    echo "<pre>";
    var_dump($dir[4]);
    echo "</pre>";

    // mkdir("check");
    if(!file_exists('demo')) {
        mkdir('demo');
    }

    if(file_exists('arrow_function.php')) {
        echo "Access";
    } else {
        echo "File not exists";
    }
    // rmdir('demo');
    $content = "<?php echo 'Access' ?>";
    $fp = fopen("myText.php","wb");
    if( $fp == false ){
        //do debugging or logging here
    }else{
        fwrite($fp,$content);
        fclose($fp);
    }
    echo "Created file" . "<br />";
    $file = fopen("myText.php",'r');
    echo $file;
    // unlink("myText.txt");
    
?>