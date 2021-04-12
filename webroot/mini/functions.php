<?php

function sortarray($array,$datekey){

    $newArray = $array;

    foreach ($newArray as &$value) {
        $value[$datekey] = strtotime($value[$datekey]);
    }

    function sort_arr($array,$dkey){
        foreach ($array as $value){
            $x[] = $value[$dkey];
        }
        arsort($x);
    
        foreach ($x as $key => $value) {
            $y[] = $array[$key];
        }
        return $y;
    };

    $sortedArray = sort_arr($newArray,$datekey);

    foreach ($sortedArray as &$value) {
    for ($i=0; $i < count($array); $i++) { 

        if ($value[$datekey] === strtotime($array[$i][$datekey])) {
            $value[$datekey] = date("jS F Y, H:i",$value[$datekey]);
        }
    }
}
return $sortedArray;
}
function Commsortarray($array,$datekey){

    $newArray = $array;

    foreach ($newArray as &$value) {
        $value[$datekey] = strtotime($value[$datekey]);
    }

    function sort_arr($array,$dkey){
        foreach ($array as $value){
            $x[] = $value[$dkey];
        }
        arsort($x);
    
        foreach ($x as $key => $value) {
            $y[] = $array[$key];
        }
        return $y;
    };

    $sortedArray = sort_arr($newArray,$datekey);

    foreach ($sortedArray as &$value) {
    for ($i=0; $i < count($array); $i++) { 

        if ($value[$datekey] === strtotime($array[$i][$datekey])) {
            $value[$datekey] = date("jS F Y, H:i:s",$value[$datekey]);
        }
    }
}
return $sortedArray;
}

function checkIfAdmin($sessionEmail){

    $adminEmails = array("admin@mail.com");

    for ($i=0; $i < count($adminEmails); $i++) { 

        if ($sessionEmail === $adminEmails[$i]) {

            $isAdmin = true;
            break;
            
        }
        else {
            $isAdmin = false;
        }
      }
      return $isAdmin;
}
function time_since($since) {
    $timeStuff = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
        array(1 , 'second')
    );

    $since = ($since);

    date_default_timezone_set('UTC');
    $timenow = date("jS F Y, H:i:s");

     $timeago = strtotime($timenow) - strtotime($since);


     for ($i=0; $i < count($timeStuff); $i++) { 
         $seconds = $timeStuff[$i][0];
         $name = $timeStuff[$i][1];
         if (($count = floor($timeago / $seconds)) != 0) {
             break;
         }
         if (($count = floor($timeago / $seconds)) != 0) {
             break;
         }
     }
     $print = ($count == 1) ? '1 '.$name.' ago' : "$count {$name}s ago";
     return $print;
}

?>
