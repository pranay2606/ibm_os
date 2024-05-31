<?php require 'Header.php'?>
<?php


require 'Sample.php';
#echo add(10,20);


//oops
/* 
class
object
inheritance
polymorphism
abstraction
interface
*/

//class and object
class Sample{
    public $age=20;
    function m1(){
        $name="php";
        echo "m1 Function"."<br>";
    }
    function __construct(){
        echo "Construter Calling"."<br>";
    }
}

class Demo extends Sample{
    function m2(){
        echo "M2 Function","<br>";
    }
}

#$obj1 = new Sample();
$obj2 = new Demo(); 
#echo $obj1->age;
#$obj1->m1();
#$obj2->m2();
$obj2->m1();
$obj2->m2();
echo $obj2->age,"<br>";

//inheritance

//overriding

//abstraction
abstract class Abs1{
    abstract function m1();
    function m2(){
        echo "m2 function"."<br>";
    }
}

class Abs2 extends Abs1{
    function m1(){
        echo "m1 Function"."<br>";
    }
}

$a1 = new Abs2();
$a1->m2();
$a1->m1();


//interface
//Complete Abstraction
// function is public abstract

interface Test1{
    function m1();
    function m2();
}

interface Test12{
    function m3();
}
interface Test13 extends Test12,Test1{
    function m4();
}
class Test2 implements Test13,Test1{
    function m1(){
        echo "m1 implemented"."<br>";
    }
    function m2(){
        echo "m2 Implemented"."<br>";
    }
    function m3(){
        echo "m2 Implemented"."<br>";
    }
    function m4(){
        echo "m2 Implemented"."<br>";
    }
}
$t1 = new Test2();
$t1->m1();
$t1->m2();
?>