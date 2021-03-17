<?php
include('conn.php');
session_start();
$_SESSION["empid"]= " ";
$_SESSION["name"]= " ";
$_SESSION["DOB"]= " ";
$_SESSION["address"]= " ";
$_SESSION["country"]= " ";
$_SESSION["state"]= " ";
$_SESSION["city"]= " ";
$_SESSION["DOJ"]= " ";

$empid= $name= $DOB= $address= $country = $state = $city=  $DOJ = $file= "";
if(isset($_POST['submit'])){
    $empid=$_POST['empid'];
    $_SESSION["empid"]= $empid;

    $name=$_POST['name'];
    $_SESSION["name"]=$name;

    $DOB=$_POST['DOB'];
    $_SESSION["DOB"]= $DOB;

    $address=$_POST['address'];
    $_SESSION["address"]=$address;

    $country=$_POST['country'];
    $_SESSION["country"]=$country;

    $state=$_POST['state'];
    $_SESSION["state"]=$state;

    $city=$_POST['city'];
    $_SESSION["city"]=$city;

    $DOJ=$_POST['DOJ'];
    $_SESSION["DOJ"]=$DOJ;
  

   $path=($_FILES['fileToUpload']['name']);
   $connection = new db();
   $conn=$connection->OpenCon();
   $userQuery=$connection->insertUser($conn,$empid, $name, $DOB, $address, $country, $state ,$city, $DOJ,$path );
  

}


?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<form action="  " method="POST" enctype="multipart/form-data">

<tr>
<td> EMP Id:</td>
<td><input type="text" id="empid" name="empid"></td> <br><br>
</tr>
<br><br>

<tr>
<td>Name:</td>
<td><input type="text" id="name" name="name" required=""> </td>
</tr>
<br><br>

<td>Date of Birth:</td>
<td><input type="date" id="DOB" name="DOB" required=""></td>
<tr>
<br><br>

<tr>
<td>Address:</td>
<td><input type="text" id="address" name="address" required=""> </td>
</tr>
<br><br>

<tr>
<td>Country:</td>
<td>
<select id="country" name="country">
<option value="country">please select country</option>
<option value="bangladesh">Bangladesh</option>
<option value="london">London</option>
<option value="canada">Canada</option>
<option value="america">America</option>
<option value="australia">Australia</option>
 </select> 
</td>
</tr>
<br><br>

<tr>
<td>State:</td>
<td><input type="text" id="state" name="state" required=""> </td>
</tr>
<br><br>

<tr>
<td>City:</td>
<td><input type="text" id="city" name="city" required=""></td>
</tr>
<br><br>

<tr>
<td>Date of Joining:</td>
<td><input type="date" id="DOJ" name="DOJ" required=""> </td>
</tr>
<br><br>
<?php

if(isset($_POST["submit"])) {
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
  

}
}
?>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" name="submit" value="Submit"> 
  
  
</form>

<?php

echo "<h2>Your Input:</h2>";
echo  $_SESSION ["empid"];
echo "<br>";
echo  $_SESSION["name"];
echo "<br>";
echo  $_SESSION["DOB"];
echo "<br>";
echo  $_SESSION["address"];
echo "<br>";
echo  $_SESSION["country"];
echo "<br>";
echo  $_SESSION["state"];
echo "<br>";
echo  $_SESSION["city"];
echo "<br>";
echo  $_SESSION["DOJ"];

?>
</body>
</html>