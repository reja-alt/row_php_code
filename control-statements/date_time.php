<?php
    echo "Date is" .  date('Y/M/D') ."<br />";
    echo "Date is" . date('Y-M-D') . "<br />";
    echo "Date is" . date('Y+M+D') . "<br />";

    $nextWeek = time() + (7 * 24 * 60 * 60);
    echo 'Now:       '. date('Y-m-d') ."<br />";
    echo 'Next Week: '. date('Y-m-d', $nextWeek) ."<br />";
    echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."<br />";

    $today = date("F j, Y, g:i a"); ;
    echo $today;
    echo date('l \t\h\e jS') . "<br />";

    $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
    echo "Tomorrow" . $tomorrow;


    $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
    $today1 = date("m.d.y");                         // 03.10.01
    $today2 = date("j, n, Y");                       // 10, 3, 2001
    $today3 = date("Ymd");                           // 20010310
    $today4 = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    $today5 = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
    $today6 = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
    $today7 = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
    $today8 = date("H:i:s");                         // 17:16:18
    $today9 = date("Y-m-d H:i:s");                   // 2001-03-

    echo $today . "<br />";
    echo $today1 . "<br />";
    echo $today2 . "<br />";
    echo $today3 . "<br />";
    echo $today4 . "<br />";
    echo $today5 . "<br />";
    echo $today6 . "<br />";
    echo $today7 . "<br />";
    echo $today8 . "<br />";
    echo $today9 . "<br />";


    date_default_timezone_set("UTC");
    echo "UTC:".time();
    echo "<br>";

    date_default_timezone_set("Europe/Helsinki");
    echo "Europe/Helsinki:".time();
    echo "<br>";

    
function time_elapsed_A($secs){
    $bit = array(
        'y' => $secs / 31556926 % 12,
        'w' => $secs / 604800 % 52,
        'd' => $secs / 86400 % 7,
        'h' => $secs / 3600 % 24,
        'm' => $secs / 60 % 60,
        's' => $secs % 60
        );
       
    foreach($bit as $k => $v)
        if($v > 0)$ret[] = $v . $k;
       
    return join(' ', $ret);
    }
   

    function time_elapsed_B($secs){
        $bit = array(
            ' year'        => $secs / 31556926 % 12,
            ' week'        => $secs / 604800 % 52,
            ' day'        => $secs / 86400 % 7,
            ' hour'        => $secs / 3600 % 24,
            ' minute'    => $secs / 60 % 60,
            ' second'    => $secs % 60
            );
        
        foreach($bit as $k => $v){
            if($v > 1)$ret[] = $v . $k . 's';
            if($v == 1)$ret[] = $v . $k;
            }
        array_splice($ret, count($ret)-1, 0, 'and');
        $ret[] = 'ago.';
    
        return join(' ', $ret);
        }
    

    
    
    $nowtime = time();
    $oldtime = 1335939007;

    echo "time_elapsed_A: ".time_elapsed_A($nowtime-$oldtime)."<br />";
    echo "time_elapsed_B: ".time_elapsed_B($nowtime-$oldtime)."<br />";
?>