<?php

// Sample if
$a =10;
$b =20;
if($a<$b){
    echo "Lesser"."<br>";
}

// Without circle braces
if($a<$b)
    echo "Lesser"."<br>";
    echo "Welcome"."<br>";

// Sample if-else
if($a>$b){
    echo "Greater"."<br>";
}else {
    echo "Lesser"."<br>";
}



// switch
$data = 110;

switch($data){
    case 80:
        echo "Value is 80"."<br>";
        break;
    case 90:
        echo "Value is 90"."<br>";
        break;
    case 100:
        echo "Value is 100"."<br>";
        break;
    default:
        echo "None of the Value"."<br>";
        break;
}

// while
$y=0;
while($y<=10){
    echo $y."<br>";
    $y++;
}
// for
for($i=0;$i<=10;$i++){
    echo $i."<br>";
}

$tech = ["java","c","php"];
foreach($tech as $j){
    echo $j."<br>";
}


function m1(){
    echo "Welcome to FUnction"."<br>";
}
function m2($a,$b){
    return $a+$b;
}

m1();
m2(100,200);

?>