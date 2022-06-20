<?php
    function nicetime($date)
    {
        // echo $date;
        if(empty($date)) {
            return "No date provided";
        }
       
        $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths         = array("60","60","24","7","4.35","12","10");
       
        $now             = time();
        $unix_date         = strtotime($date);

        echo $now . "<br />";
        echo $unix_date . "<br />";
       
           // check validity of date
        if(empty($unix_date)) {   
            return "Bad date";
        }
    
        // is it future date or past date
        if($now > $unix_date) {   
            $difference     = $now - $unix_date;
            $tense         = "ago";
           
        } else {
            $difference     = $unix_date - $now;
            $tense         = "from now";
        }
        echo $difference . "<br />";
       
        for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
            $difference /= $lengths[$j];
        }
       
        $difference = round($difference);
        echo $difference;
       
        if($difference != 1) {
            $periods[$j].= "s";
        }
       
        return "$difference $periods[$j] {$tense}";
    }
    
    $date = "2009-03-04 17:45";
    $result = nicetime($date); // 2 days ago
    echo $result . "<br />";

    $time = date('Y/M/D', mktime(0,0,0,2,5,null));
    echo $time;

    // set the default timezone to use.
    date_default_timezone_set('UTC');



    //Prints something like: Monday
    echo date("l") . "<br />";

    // Prints something like: Monday 8th of August 2005 03:12:46 PM
    echo date('l jS \of F Y h:i:s A')  . "<br />";

    // Prints: July 1, 2000 is on a Saturday
    echo "May 21, 2020 is on a " . date("l", mktime(0, 0, 0, 5, 21, 2022))  . "<br />";

    /* use the constants in the format parameter */
    // prints something like: Wed, 25 Sep 2013 15:28:57 -0700
    echo date(DATE_RFC2822)  . "<br />";

    // prints something like: 2000-07-01T00:00:00+00:00
    echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))  . "<br />";

    echo date('l \t\h\e jS');

    // first line of PHP
    $defaultTimeZone='UTC';
    if(date_default_timezone_get()!=$defaultTimeZone) date_default_timezone_set($defaultTimeZone);

    // somewhere in the code
    function _date($format="r", $timestamp=false, $timezone=false)
    {
        $userTimezone = new DateTimeZone(!empty($timezone) ? $timezone : 'GMT');
        $gmtTimezone = new DateTimeZone('GMT');
        $myDateTime = new DateTime(($timestamp!=false?date("r",(int)$timestamp):date("r")), $gmtTimezone);
        $offset = $userTimezone->getOffset($myDateTime);
        return date($format, ($timestamp!=false?(int)$timestamp:$myDateTime->format('U')) + $offset);
    }

    /* Example */
    echo 'System Date/Time: '.date("Y-m-d | h:i:sa").'<br>';
    echo 'New York Date/Time: '._date("Y-m-d | h:i:sa", false, 'America/New_York').'<br>';
    echo 'Belgrade Date/Time: '._date("Y-m-d | h:i:sa", false, 'Europe/Belgrade').'<br>';
    echo 'Belgrade Date/Time: '._date("Y-m-d | h:i:sa", 514640700, 'Europe/Belgrade').'<br>';
    echo '<time datetime="'.date('c').'">'.date('Y - m - d').'</time>' .'<br>';

    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");

?>