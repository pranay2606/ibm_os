<?php
// Single line comment

# Another single line comment

/*
Multiline comment
with some
long text
*/

// What is a variable


// Variable types
/*
    String
    Integer
    Float
    Boolean
*/
// Declare variables
$name = "php";
$age = 30;
$phno = 112345;
$val = 10.5;
$isSet = true;

// Print the variables. Explain what is concatenation
echo "$name"."<br>";
echo "$age"."<br>";
echo "$phno"."<br>";
// Print types of the variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($val)."<br>";
echo gettype($isSet)."<br>";

// Print the whole variable var_dump
echo var_dump($name)."<br>";
echo var_dump($age)."<br>";
echo var_dump($val)."<br>";
echo var_dump($isSet)."<br>";

// Change the value of the variable
$age="40";
$isSet=false;
echo $age."<br>";
echo gettype($age)."<br>";
echo gettype($isSet)."<br>";
// Constants define()
define("PI",3.14);
echo PI."<br>";
// Declaring numbers
$a=10;
$b="10";
$c=30;

// Arithmetic operations
echo $a+$b."<br>";

// Assignment with math operators
//= ,== ,===
echo $a===$b."<br>";

// Number checking functions is_integer,is_float,is_string

echo is_integer($a)."<br>";
echo is_integer($b)."<br>";
// Create array
$tech = ["Python","JAVA","PHP","HTML"];
echo $tech[0]."<br>";
echo var_dump($tech)."<br>";


// Print the whole array


// Get element by index
echo $tech[1]."<br>";

// Set element by index
$tech[1] ="C";
echo $tech[1]."<br>";

// Print the length of the array -- count()

echo count($tech)."<br>";
//Add and Remove Elements array_push,array_pop,array_unshift,array_shift
array_push($tech,"C++");
array_unshift($tech,"SQL");
echo var_dump($tech)."<br>";

// Split the string into an array explode
$data = "welcome to PHP";
$arrData = var_dump(explode(' ',$data))."<br>";

?>