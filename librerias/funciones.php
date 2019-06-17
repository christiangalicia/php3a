<?php

function arreglo(){
    $a= array("bmw","audi","wv");
    $r="";
    for($x=0;$x<count($a);$x++) {
            $r =$r. "<tr><td>".$a[$x]."</td></tr>";           
    }
    return $r;
}
function arreglo2(){
    $a[]="bmw";
    $a[]="auid";
    $a[]="wv";
    $r="";
    foreach ($a as $a2) {
            $r =$r. "<tr><td>".$a2."</td></tr>";           
    }
    return $r;
}

function arrayA(){
    $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // $age["Peter"]
    // $age["Peter"]=38;
    $r="";
    foreach ($ages as $key=>$age){
         $r =$r. "<tr><td>".$key." tiene ".$age."</td></tr>";      
    }
    return $r;
}

?>