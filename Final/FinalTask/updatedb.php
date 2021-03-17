<?php
class updatedb{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "person";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function GetUserByname($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }


 function InputCheckUser($conn,$table,$name)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE name='". $name."'");
 return $result;
 }

 function FetchCheckUser($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function UpdateUser($conn,$table,$id, $name,$address,$email,$password,$telephone,$superpower)
 {
     $sql = "update heros SET Name='$name',Address='$address',Email='$email',Password='$password',Telephone='$telephone',Superpower='$superpower' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "Updated Successfully!";
    } else {
        $result= "Error Updating Record!" ;
    }
    return $result;
 }

  


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>