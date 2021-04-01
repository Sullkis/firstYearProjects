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

    print_r ($sorted);

    foreach ($sorted as &$value) {
    for ($i=0; $i < count($items); $i++) { 
        if ($value[$datekey] === strtotime($items[$i][$datekey])) {
            $value[$datekey] = $items[$i][$datekey];
        }
    }
}
for ($i=0; $i < count($sorted); $i++) { 
    $toPrintTitle = $sorted[$i][$datekey];
    echo $toPrintTitle. " ";
}
return $sorted;
}
/*$items = array(
    array(
        'ID' => 1,
        'datePosted' =>'1st April 2021, 15:22 UTC',
        'title' =>'hello',
        'post' =>'from the other side',
    ),
    array(
        'ID' => 2,
        'datePosted' =>'1st April 2021, 15:28 UTC',
        'title' =>'bye',
        'post' =>'is the greatest',
    ),
     array(
        'ID' => 3,
        'datePosted' =>'1st April 2021, 15:15 UTC',
        'title' =>'to',
        'post' =>'dee doop',
    ),
);*/
//$newArray = $items;
/*foreach ($newArray as &$value) {
    $value['datePosted'] = strtotime($value['datePosted']);
}
*/
/*function sort_arr($array,$key){
    foreach ($array as $k => $v) {
        $b[] = strtolower($v[$key]);
    }

    arsort($b);

    foreach ($b as $k => $v) {
        $c[] = $array[$k];
    }
    return $c;
};

$sorted = sort_arr($newArray,'datePosted');

print_r ($sorted);

foreach ($sorted as &$value) {
    for ($i=0; $i < count($items); $i++) { 
        if ($value['datePosted'] === strtotime($items[$i]['datePosted'])) {
            $value['datePosted'] = $items[$i]['datePosted'];
        }
    }
}


for ($i=0; $i < count($sorted); $i++) { 
    $toPrintTitle = $sorted[$i]['datePosted'];
    echo $toPrintTitle. " ";
}
*/
?>