<?php
    var_dump(ini_get('memory_limit'));
    ini_set('memory_limit', '612M');
    var_dump(ini_get('memory_limit'));
    var_dump(ini_get('precision'));
    var_dump(ini_get('max_execution_time'));
    ini_set('max_execution_time', 300);
    var_dump(ini_get('max_execution_time'));
    var_dump(ini_get('file_uploads'));
    echo "<pre>";
    var_dump(ini_get('SMTP'));
    echo "</pre>"; 
    ini_set('SMTP', 'localhost: 3000');
    echo "<pre>";
    var_dump(ini_get('SMTP'));
    echo "</pre>";

    // var_dump('E-ALL');
    // var_dump(ini_get('display_errors'));
    // var_dump(ini_get('error_log'));
?>