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
        if ($value[$datekey] === strtotime($array[$i][$datekey])) {
            $value[$datekey] = $array[$i][$datekey];
        }
    }
}
return $sorted;
}
?>