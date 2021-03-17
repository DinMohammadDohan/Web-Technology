<?php

 $error="";

$id = $name = "";

if (isset($_POST['update'])){
  if ((empty($_POST['name']))) {
    
    $error = "Enter Correct Input";
    
    }
    else
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $telephone=$_POST['telephone'];
  $superpower=$_POST['super'];  

$connection = new updatedb();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"heros",$id, $name,$address,$email,$password,$telephone,$superpower);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>