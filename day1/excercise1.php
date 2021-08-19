<?php
function flattenArray(array $arr) :array{
    $ans = array();
    foreach ($arr as $a){
        if(is_array($a)){
            $ans = array_merge($ans,flattenArray($a));
        } else{
            array_push($ans,$a);
        }
    }
    return $ans;
}

$arr=array(2,3,array(4,5),array(6,7),8);
print_r(flattenArray($arr));

?>