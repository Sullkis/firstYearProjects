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
	$postedTime = date("jS F Y, H:i:s")." UTC";
    $sorted = sort_arr($newArray,$datekey);


    foreach ($sorted as &$value) {
		$value[$datekey] = date("jS F Y, H:i",$value[$datekey])." UTC";
}
return $sorted;
}
?>
