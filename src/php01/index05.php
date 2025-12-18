<?php
$a = 7;

if ($a==5){
    echo "\$aは5です";
}elseif ($a==7){
    echo "\$aは7です";

}else{
    echo "\$aは5と7以外です";
    
}
echo "<br />";
switch ($a+1){;
case 5:
echo "5です" ;  
        break; 
case 6:
echo "6です"  ;
        break;  
case 7:
echo "7です"   ;
        break; 
default:
echo "×";
        break; 

}
echo "<br />";

$result = $a=5?"5です":"6です";
echo $result;