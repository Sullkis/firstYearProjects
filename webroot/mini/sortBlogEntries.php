<?php
function sortarray($array,$datekey){

    $newArray = $array;
    foreach ($newArray as &$value) {
        $value[$datekey] = strtotime($value[$datekey]);
    }
    function sort_arr($array,$key){
        foreach ($array as $k => $v) {
            $b[] = strtolower($v[$key]);
        }
    
        arsort($b);
    
        foreach ($b as $k => $v) {
            $c[] = $array[$k];
        }
        return $c;
    };
    $sorted = sort_arr($newArray,$datekey);


    foreach ($sorted as &$value) {
    for ($i=0; $i < count($array); $i++) { 
        $value[$datekey] = date("jS F Y, H:i", $array[$i][$datekey])." UTC";
    }
}
return $sorted;
}
?>
