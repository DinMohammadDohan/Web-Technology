<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "company";
$conn = new mysqli($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}


function insertUser($conn,$empid, $name,$DOB, $address, $country , $state , $city,  $DOJ,$path){
$result=$conn->query("insert into employee(empid, name,DOB, address, country , state , city,  DOJ,path ) values('$empid','$name','$DOB','$address','$country','$state','$city','$DOJ','$path')") or die(mysqli_error($conn));
    return $result;
    
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>