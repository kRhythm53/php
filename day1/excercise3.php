<?php

$input=array("snake_case","camel_case");

function CamelCase(string $input) :string{
    $ans="";
    for ($i=0;$i<strlen($input);$i++){
        if($input[$i]=="_"){
            $ans=$ans.strtoupper($input[$i+1]);
            $i++;
        }else{
            $ans=$ans.$input[$i];
        }
    }
    return $ans;
}

foreach ($input as $item){
    echo CamelCase($item." ");
}