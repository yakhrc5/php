<?php
$people = [
    "peason1"=>'Taro',
    "peason2"=>'Jiro',
    "peason3"=> 'Saburo'
];

var_dump($people);
echo "<br />"."<br />";

echo $people["peason2"];

echo "<br />"."<br />";

$people2 = [
[
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
],[
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
],[
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
]


];
echo $people2[2]["first_name"];

echo "<br />"."<br />";

$people3 = array("taro","jiro","saburo");

foreach ($people3 as $person){
    echo $person;
    echo "<br />";
}

foreach($people as $person=>$name){
    print $person ."は".$name."です"."<br />";
}
$people4 =[
["taro",25,"men"],
["jiro",20,"men"],
["hanako",16,"women"]
["hanako",16,"women"]
["hanako",16,"women"]
["hanako",16,"women"]
];

 foreach($people4 as $person1){
    echo $person1[0]."(".$person1[1]."歳".$person1[2].")"."<br />";
}