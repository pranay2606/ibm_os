<?php
/* 
Host ---  localhost or 127.0.0.1
Username --- root
Password --- 
Database --- ibm
Port --- 3306
*/

$host = "localhost";
$username = "root";
$password = "";
$database = "ibm";

$conn = new mysqli($host,$username,$password,$database,3306);

if($conn->connect_error==TRUE){
    die("Connection Failed");
}

echo "Conncetion Success"."<br>";

// MySQLi object, Procedural and PDO
#$sql = "insert into sample values(103,'abc',1500,20);";
#$sql .= "insert into sample values(104,'abc',1500,20);";
#$sql .= "insert into sample values(102,'bcd',2000,30)";

/*if($conn->query($sql)==TRUE){
    echo "Records Inserted";
}else{
    echo $conn->error;
}*/
#if($conn->multi_query($sql)==TRUE){
#    echo "Records Inserted";
#}else{
#    echo $conn->error;
#}

$sql = "select * from sample";

$out = $conn->query($sql);

if($out->num_rows>0){
    while($row = $out->fetch_assoc()){
        echo $row['id']."|".$row['name']."|".$row['sal']."|".$row['deptno']."<br>";
    }
}else{
    echo "No Records Found";
}



/*
if(mysqli_query($conn,$sql)==TRUE){

}
*/

$conn->close();


?>