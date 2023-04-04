<?php

$a = ',"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"';
$l = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
$cad = "";
foreach($l as $value){
    $f = str_replace(',"', ',"'.$value, $a);
    $cad .= $f;
}

echo count($l);

?>