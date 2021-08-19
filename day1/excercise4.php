<?php
$json= "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},
        {\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Bangalore\"}},
        {\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Mumbai\"}},
        {\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Delhi\"}},
        {\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Ranchi\"}},
        {\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Punjab\"}}]}";


$jsonarray = json_decode($json,true);

$names =array();
$ages  =array();
$cities =array();
$unique_names =array();
$old_players =array();

foreach ( $jsonarray["players"] as $arr){
    array_push($names,$arr["name"]);
    array_push($ages,$arr["age"]);
    array_push($cities,$arr["address"]["city"]);
}
$unique_names = array_unique($names);

$max_age=max($ages);

$unique_names=array_unique($names);
for($i=0;$i<count($ages);$i++){
    if($ages[$i]==$max_age){
        array_push($old_players,$names[$i]);
    }
}

print "names : ";
print_r($names);
print "ages : ";
print_r($ages);
print "city : ";
print_r($cities);
print "uniques names : ";
print_r($unique_names);
print "oldest players : ";
print_r($old_players);
?>