<?php
function sortarray($array,$datekey){

    $newArray = $array;
    foreach ($newArray as &$value) {
        $value[$datekey] = strtotime($value[$datekey]);
    }
    function sort_arr($array,$key){
        foreach ($array as $k => $v) {
            $arrP1[] = strtolower($v[$key]);
        }
    
        arsort($arrP1);
    
        foreach ($arrP1 as $k => $v) {
            $arrP2[] = $array[$k];
        }
        return $arrP2;
    };
    $sorted = sort_arr($newArray,$datekey);


    foreach ($sorted as &$value) {
    for ($i=0; $i < count($array); $i++) { 
        $value[$datekey] = date("jS F Y, H:i", $value[$datekey])." UTC";
    }
}
return $sorted;
}
?>
